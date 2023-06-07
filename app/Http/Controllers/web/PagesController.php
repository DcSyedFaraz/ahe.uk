<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Query;
use Illuminate\Http\Request;

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

        return redirect()->back()->withSuccess("Thank you for showing your intrest, We've receive your query successfully.");

    }

}
