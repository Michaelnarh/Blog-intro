@extends('layouts.master')
@section("title","| index")
@section('content')
<div class="container margin-limit">
        @include('_partials.sessionmsg')
</div>
 
<div class="container">
       <span>Blog instance</span>
        <hr>
               <h3> {{$blog->title}}  </h3> 
               <div class="row">
                   <div class="col-md-3">
                       <div class="img-container">
                           <img src="{{asset("images/" . $blog->image)}}" alt="user" class="image-fluid" height="300" width="220">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card bg-dark text-white">
                                <div class="card-body">
                                        {!!$blog->body!!}
                                    </div>
                                    
                                </div>
                            <h6 class="text-mutted mt-2">
                                   <strong>By:</strong> {{$blog->name}}
                            </h6>
                    </div>
               </div>
               {!! Form::open(["route"=>"blogs.store","method"=>"GET"])!!}
               {{Form::submit("Show blogs",["class"=>"btn btn-success"])}}
               {!!Form::close()!!}
           </div>
             
       
</div>
@endsection