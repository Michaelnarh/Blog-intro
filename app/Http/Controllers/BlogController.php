<?php

namespace App\Http\Controllers;

use App\Blog;
use Image;
use Session;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BlogController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs=Blog::orderBy("id","desc")->paginate(10);
        return view("blogs.index",compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("blogs.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate input
        $this->validate($request, [
            // 'title' => 'required',
            // 'body' => 'required ',
            // 'image' => 'required',
            // 'name' => 'required'

        ]);
    
    
          //create new instance of blog
        $blog = new Blog;
        
        $blog -> name   =   $request-> name;
        $blog -> title  =   $request-> title;
        $blog -> body   =   $request-> body;
        {
            $image      =  $request-> image;
            $image_name = time() . ".".$image->getClientOriginalExtension();
            $location   = public_path("images/".$image_name);
            Image::make($image)->resize(550,550)->save($location);
            $blog -> image = $image_name;
        }

        //save new blog
        
        // return($blog);
        $blog->save();
        Session::flash("success","The blog is posted succesfully");
        return redirect()->route("blogs.index");
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
        $blog = Blog::find($blog->id);
        // return($blog);
        return view('blogs.show',compact("blog"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
        $blog=Blog::find($blog->id);
        return view("blogs.edit",compact("blog"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
        $blog= Blog::find($blog->id);

        $blog -> name   =   $request-> name;
        $blog -> title  =   $request-> title;
        $blog -> body   =   $request-> body;
        // {
        //     $image      =  $request-> image;
        //     $image_name = time() . ".".$image->getClientOriginalExtension();
        //     $location   = public_path("images/".$image_name);
        //     Image::make($image)->resize(550,550)->save($location);
        //     $blog -> image = $request->$image_name;
        // }
        // dd($blog);
        $blog->save();
        Session::flash("success","The blog is edited successfully");
        return redirect()->route("blogs.show",compact("blog"));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
        $blog=Blog::find($blog->id);
        // return($blog);
        Session::flash("success","The Blog with id $blog->id is deleted successfully");
        $blog->delete();
        
        return redirect()->route("blogs.index");
    }

   
}
