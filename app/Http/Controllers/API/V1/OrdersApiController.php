<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\OrderResource;
use App\Order;
use App\Status;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrdersApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd(config('services.payment.token'));
        $orders = null;

        if( $request->query('status') ){
            $status = Status::where('slug', '=', $request->query('status') )->firstOrFail();
            $orders = Order::with('deadline', 'academic_Level', 'orderService', 'status', 'user','files', 'invoice.status' )->where(['status_id' => $status->id ])->orderBy('created_at','desc')->get();

        } else {
            // $orders = Order::all();
            // dd($orders);
            $orders = Order::with('status','invoice', 'user','files','deadlineName', 'invoice.status' )->orderBy('created_at','desc')->get();

            return OrderResource::collection($orders)->response()->setStatusCode(Response::HTTP_OK);
        }

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
        $order = Order::with( 'status', 'user', 'invoice.status' )->findOrFail($id);

        return (new OrderResource($order))
        ->response()
        ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Order $order)
    {
        return (new OrderResource($order))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
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
