<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\InvoiceResource;
use App\Invoice;
use App\Mail\PaymentPaidMail;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

class InvoiceApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        {
            $invoices = null;

            if( $request->query('status') ){
                $status = Status::where('slug', '=', $request->query('status') )->firstOrFail();
                $invoices = Invoice::where(['status_id' => $status->id])->with('order', 'user', 'status')->orderBy('created_at','desc')->get();
            } else {
                $invoices = Invoice::with('order', 'user', 'status')->orderBy('created_at','desc')->get();
            }
// dd($invoice);
            return InvoiceResource::collection($invoices)
                ->response()
                ->setStatusCode(Response::HTTP_OK);
        }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Invoice $invoice){
        return(new InvoiceResource($invoice))->reponse()->setSatusCode(Response::HTTP_OK) ;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        $invoice->load('user', 'status', 'order', 'order.papertype');

        return (new InvoiceResource($invoice))
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
    public function update(Request $request, Invoice $invoice)
    {
        $invoice->load('user', 'order', 'status');

        $invoice->update($request->all());

        if($invoice->status_id==5){
           //Mail::to($invoice->user->email)->send(new PaymentPaidMail($invoice));
           //Mail::to(config('app.mail_address'))->send(new PaymentPaidMail($invoice));
        }

        return (new InvoiceResource($invoice))
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
