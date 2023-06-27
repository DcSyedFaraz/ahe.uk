<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Mail\QueryAdminMail;
use App\Mail\QueryMail;
use App\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index(){

        // Auth::logout();
        // dd(Auth::user());

        return view('pages.home');
    }

    public function about(){

        // dd(addCurrency(4));
        return view('pages.about');
    }
    public function queryStore( Request $request){
        // dd($request);
        $query =  Query::create($request->all());
        // return $query->deadlineName;
        // Send mail to user
       //Mail::to($query->email)->send(new QueryMail($query));
        // Send mail to admin
       //Mail::to(config('app.mail_address'))->send(new QueryAdminMail($query));
       return response()->json(['success' => "Thank you for showing your intrest, We've received your query successfully."]);


        // return redirect()->back()->withSuccess("Thank you for showing your intrest, We've receive your query successfully.");

    }

}
