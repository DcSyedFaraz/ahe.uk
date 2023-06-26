<?php

namespace App\Http\Controllers\Customer;

use App\AcademicLevel;
use App\Deadline;
use App\Http\Controllers\Controller;
use App\Invoice;
use App\Order;
use App\PaperType;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if( $request->query('status') ){
            $status = Status::where('slug', '=', $request->query('status') )->firstOrFail();

            $orders = Order::where(['user_id' => Auth::user()->id, 'status_id' => $status->id ] )->orderBy('created_at','desc')->get();

            $orders_status = Status::where('for', '=', 'order' )->get();

            return view('customer.orders.index', compact('orders', 'orders_status'));
        }


        $orders = Order::where('user_id', '=', Auth::user()->id )->orderBy('created_at','desc')->get();
        $orders_status = Status::where('for', '=', 'order' )->get();

        return view('customer.orders.index', compact('orders', 'orders_status'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $career_levels = AcademicLevel::all();
        $order_services = PaperType::all();
        $deadlines = Deadline::all();

        return view('customer.orders.create', compact('career_levels', 'order_services', 'deadlines'));//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge([ "user_id"=> auth()->user()->id, "email"=> auth()->user()->email]);
        Order::create($request->all());

        return redirect()->route('customer.orders.index')->withSuccess('Order Place Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        // dd($order);
        $files= $order->files;
        return view('customer.orders.show', compact('order','files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order=Order::findorFail($id);
        return $order;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
