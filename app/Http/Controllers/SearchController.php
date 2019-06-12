<?php

namespace App\Http\Controllers;
use Session;
use App\Blog;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function Search(Request $request){       
    {
        $word_search = $request->search;
        $blogs = Blog::all();
        $search_blogs;
        foreach($blogs as $blog)
         {
             $var=0;
             if($request->has($request->search)){
                 return $blog->where('search',"$request->search");
             }
             if(($blog->name)==($word_search)){
                //  for($i=0;$i<=$var;){

                //     //  $arr[$var] =$blog;
                //  }
                  return $blog;
            }
            
            $var++;
        }
        
        return $blog::all();

        Session::flash("success","name found");
        return view("blogs.search")->withBlog($search_blogs);
    }
    
    // else{

    //     return view("blogs.search");
    // }
         
         

    }
}
