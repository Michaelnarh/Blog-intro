<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class PagesController extends Controller
{
    //
  public  function Homepage(){
        return view('home');
    }

    public function Aboutpage(){
        return view('mainPages.about');
    }
    
    public function Blogpage(){
        
        $blogs=Blog::orderBy("created_at","desc")->paginate(6);
        return view('mainPages.blog',compact("blogs"));
    }
    public function Blogdetailpage(){

        return view('mainPages.blog-detail');
    }

    public function Contactpage(){
        return view('mainPages.contact');
    }

    public function Sharepage(){
        return view('mainPages.share');
    }
    public function Supportpage(){
        return view('mainPages.support');
    }
    public function Testpage(){
        return view('mainPages.test');
    }

}
