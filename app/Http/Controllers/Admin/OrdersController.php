<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Resources\Api\OrderResource;
use App\Order;
use App\Status;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders_status = Status::where('for', '=', 'order' )->get();
        // dd($orders_status);

        return view('admin.orders.index', compact('orders_status'));
    }

    public function getOrders(Request $request)
    {
        $orders = null;

        // dd($request);
        if( $request->query('status') ){
            $status = Status::where(['slug' => $request->query('status') ])->firstOrFail();
            $orders = Order::with( 'status', 'user','papertype','deadlineName','invoice.status' )->where(['status_id' => $status->id ])->orderBy('created_at','desc')->get();
        } else {
            $orders = Order::with( 'status', 'user', 'papertype','deadlineName','invoice.status')->orderBy('created_at','desc')->get();
        }
// dd($orders);
        return OrderResource::collection($orders)->response();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::with('user')->findOrFail($id);
        // return $order;
        $files= $order->files;
        // return $files;
        return view('admin.orders.show', compact('order','files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
