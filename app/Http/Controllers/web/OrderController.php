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
use App\WebSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderAdminMail;
use App\Mail\OrderMail;
use League\CommonMark\Reference\Reference;

class OrderController extends Controller
{
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
        $fares= Fare::all();
        return view('pages.order', compact('paper_types','fares', 'academic_levels', 'deadlines', 'reference_styles', 'subjects', 'countries', 'web_setting'));
    }
    public function store(Request $request)
    {
        {
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

                // if ($request->spacing == 2) {
                //     $request->merge(['spacing' => true]);
                // }

                // else{
                //     $request->merge(['spacing' => false]);
                // }

                //Dynamic getting price from database according to deadline and Academic level
                $fare = Fare::where(['academic_level_id' => $request->academic_level, 'deadline_id' => $request->deadline])->firstOrFail();
                // dd($request);
                $request->merge([
                    'cost_per_page' => $fare->per_page_price,
                    "total_price" => ($fare->per_page_price * $request->number_of_pages),
                    'academic_level' => $fare->academic_level->name,
                    'deadline' => $fare->deadline->name,
                ]);
                // dd($request);
                DB::beginTransaction();

                $order = Order::create($request->all());
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
                // Send mail to user
                //  Mail::to($request->email)->send(new OrderMail($request, $files));

                // Send mail to admin
                //   Mail::to(env('MAIL_FROM_ADDRESS', config('app.app_email')) )->send(new OrderAdminMail($request, $files));

                DB::commit();

                //  return $order;
                return redirect()->back()->withSuccess("Thank you for showing your intrest, We've receive your query successfully.");
            }
    }
}
