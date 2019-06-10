<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function Search(Request $request){       
    {
        $word_search = $request->search;
        $blogs = Blog::all();
        foreach($blogs as $blog)
         {
             $var=0;
             if(($blog->name)==($word_search)){
                //  for($i=0;$i<=$var;){

                //     //  $arr[$var] =$blog;
                //  }
                 return view("blogs.search")->withBlog($blog);
             }
           $var++;
         }
    }
    
    // else{

    //     return view("blogs.search");
    // }
         
         

    }
}
