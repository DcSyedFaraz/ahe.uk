<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($slug)
    {
        // dd($slug);
        $service = Service::where(['slug' => $slug])->firstOrFail();

       return view('pages.services.show', compact('service'));
    }
}
