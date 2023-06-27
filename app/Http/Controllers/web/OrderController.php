<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use App\PaperType;
use App\Deadline;
use App\AcademicLevel;
use App\Country;
use App\Order;
use App\RefrenceStyle;
use App\Subject;
use App\Fare;
use App\File;
use App\Http\Requests\StoreOrderRequest;
use App\Invoice;
use App\WebSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderAdminMail;
use App\Mail\OrderMail;
use App\Mail\UserCreateMail;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use League\CommonMark\Reference\Reference;

class OrderController extends Controller
{
    public $password;


    public function __construct() {
        $this->password = Str::random(8);
    }


    public function create()
    {
        // return true;
        $paper_types = PaperType::orderBy('id', 'ASC')->get();
        $academic_levels = AcademicLevel::orderBy('id', 'ASC')->get();
        $deadlines = Deadline::orderBy('id', 'ASC')->get();
        $reference_styles = RefrenceStyle::orderBy('id', 'ASC')->get();
        $subjects = Subject::orderBy('id', 'ASC')->get();
        $countries = Country::orderBy('id', 'ASC')->get();
        $web_setting = WebSetting::first();
        $fares = Fare::all();
        return view('pages.order', compact('paper_types', 'fares', 'academic_levels', 'deadlines', 'reference_styles', 'subjects', 'countries', 'web_setting'));
    }
    public function store(StoreOrderRequest $request)
    { {
            //    return $request;

            if ($request->hasfile('emailAttachments')) {
                $fileSize = 0;
                $fileQty = 0;
                foreach ($request->file('emailAttachments') as $file) {
                    $fileSize += $file->getSize();
                    $fileQty = $fileQty + 1;
                }

                if ($fileQty > 10) {
                    $request->session()->flash('message', 'file quantity exceeded the limit.');
                    return redirect()->route('order');
                }

                if ($fileSize >  25000000) {
                    $request->session()->flash('message', 'file size exceeded the limit.');
                    return redirect()->route('order');
                }
            }


            $files = [];


            //Dynamic getting price from database according to deadline and Academic level
            $fare = Fare::where(['academic_level_id' => $request->academic_level, 'deadline_id' => $request->deadline])->firstOrFail();
            $request->merge([
                'cost_per_page' => $fare->per_page_price,
                "total_price" => ($fare->per_page_price * $request->number_of_pages),
                'academic_level' => $fare->academic_level->name,
                'deadline' => $fare->deadline->name,
            ]);
            // dd($request);
            // $password = Str::random(8);
            // $this->password = $password;

            DB::beginTransaction();
            // dd($request);
            $user = User::where(['email' => $request->email])->first();
            // dd($user);
            // flag to check user is created default false
            $flag = false;

            if (!$user) {

                $flag = true;

                $user = User::create(
                    // ['email'    =>  request('email')],
                    [
                        'name'      => request('name'),
                        'email'    =>  request('email'),
                        'phone'     => request('phone'),
                        'country'   => request('country'),
                        'password'  => Hash::make($this->password),
                    ],
                );

            }
                $user->roles()->sync(2);




                $deadline_id =  Deadline::where('name', $request->deadline)->first();
                $request->merge(['user_id' => $user->id, 'package_id' => $request->package, 'deadline_id' =>$deadline_id->id]);
                // $this->user_created = true;
                // dd($request);
                session()->flash('userData', ['userEmail' => 'Customer Account' . ' ' . $user->email . ' ' . 'created successfully check your email for login credentials', 'userId' => $user->id]);
            // dd($request);
            $order = Order::create(

                $request->all()
            );
            // return $order->subjectName;
            // dd($request->total_price);
            // Generating Invoice before order placing
            $invoice = Invoice::create([
                "ref_no"    => Str::uuid()->toString(),
                "amount"    => $request->total_price,
                "order_id"  => $order->id,
                "user_id"   => $user->id,
                "gateway"   => "stripe",
                "currency"  => "",
            ]);


            if ($request->hasfile('emailAttachments')) {
                foreach ($request->file('emailAttachments') as $file) {
                    $fileName = uniqid() . '_' . time() . '_' . $file->getClientOriginalName();
                    $filePath = $file->storeAs('uploads', $fileName, 'public');

                    array_push($files, $filePath);

                    File::create([
                        "order_id" => $order->id,
                        "file_path" => $filePath
                    ]);
                }
            }
            $data = [
                'user' => $user,
                'password' => $this->password,
                'files' => $files,
                'order' => $order,
                'flag' => $flag,
                'invoice' => $invoice,
            ];
            // Send mail to user
           //Mail::to($request->email)->send(new OrderMail($data));

            // // Send mail to admin
           //Mail::to(config('app.mail_address'))->send(new OrderAdminMail($request, $files, $order));




            DB::commit();
            return redirect()->route('invoice', ['reference' => $invoice->ref_no]);

            //  return $order;
            // return redirect()->back()->withSuccess("Thank you for showing your intrest, We've receive your query successfully.");

            // return view('pages.about', compact('data'));

        }
    }

    public function invoice(Request $request)
    {

        // dd($request);
        if ($request->query('reference')) {

            $invoice = Invoice::where(['ref_no' => $request->query('reference'), 'status_id' => 4])->with('order')->firstOrFail();
            $order   = Order::where(['id' => $invoice->order_id])->firstorFail();

            if (session('userData.userId') !=  $invoice->user_id) {
                session()->forget('userData');
            }

            return view('pages.invoice', compact('invoice', 'order'));
        }

        return redirect()->route('order');
    }
}
