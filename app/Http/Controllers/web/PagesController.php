<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Mail\QueryAdminMail;
use App\Mail\QueryMail;
use App\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index(){

        return view('pages.home');
    }

    public function about(){

        // return true;
        return view('pages.about');
    }
    public function queryStore( Request $request){
        $query =  Query::create($request->all());
        // return $query->deadlineName;
        // Send mail to user
        Mail::to($query->email)->send(new QueryMail($query));
        // Send mail to admin
        Mail::to('dcsyedfaraz@gmail.com')->send(new QueryAdminMail($query));

        return redirect()->back()->withSuccess("Thank you for showing your intrest, We've receive your query successfully.");

    }

}
