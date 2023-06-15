<?php

namespace App\Http\Controllers\web;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function create(){
        $blogs = Blog::orderBy('title', 'DESC')->get();
      //    return $blogs;
      return view('pages.blogs.index',compact('blogs'));
  }
      public function show($post){
        $blog = Blog::where(['slug' => $post])->firstOrFail();
        // return $blog;
        $blogs = Blog::all();

        // return $blog->image_path;

        // View::share('blogs',$blogs);
        return view('pages.blogs.show',compact('blog','blogs'));
    }

  public function blogone(){

    $blog = Blog::where('slug','10-best-technical-universities-of-uae')->first();
    return view('pages.blogs.show', compact('blog'));
}

public function blogtwo(){
    $blog = Blog::where('slug','how-to-write-ph-d-dissertation')->first();
    return view('pages.blogs.show', compact('blog'));
}

}
