<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Invoice;
use App\Status;
use Illuminate\Http\Request;

class InvoicesController extends Controller
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

            $invoices = Invoice::where(['status_id' => $status->id ] )->orderBy('created_at','desc')->get();

            $invoices_status = Status::where('for', '=', 'invoice' )->get();

            // return $invoices;

            return view('admin.invoices.index', compact('invoices', 'invoices_status'));
        }

        $invoices = Invoice::orderBy('created_at','desc')->get();
        // return $invoices;
        // return $invoice;
        $invoices_status = Status::where('for', '=', 'invoice' )->get();

        return view('admin.invoices.index', compact('invoices', 'invoices_status'));

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
    public function show($ref_no)
    {

        $invoice = Invoice::where('ref_no', '=', $ref_no )->with('order')->firstOrFail();
        // dd($invoice);
        return view('admin.invoices.show', compact('invoice'));
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
