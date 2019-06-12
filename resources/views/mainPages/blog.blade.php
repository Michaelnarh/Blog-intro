@extends('layouts.master')
@section('title',"| Blog")
@section('content')


<div class="container">
    <div class="row">
        @foreach ($blogs as $blog)
        <div class="col-md-8">

            <div class="card">
                <div class="d-flex">
                    <ul>
                        <img src="{{asset("image/".$blog->image)}}" alt="">
                    </ul>
                    <ul>
                        <div class="card bg dark text-white">
                            {{$blog->body}}
                        </div>
                    </ul>
                    <strong>Posted By:</strong><span class="mr-2">{{$blog->name}}</span>
                </div>
            </div>
             
        </div>
        @endforeach
        <div class="col-md-4">

        </div>
    </div>
</div>
<div class="mt-5 py-3 margin-limit">

    em ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
</div>
<div class="mt-5 py-3 card">
    em ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
</div>
<div class="mt-5 py-3 card">
    em ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
</div>
@endsection