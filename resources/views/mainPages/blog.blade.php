@extends('layouts.master')
@section("title","| index")
@section('content')
<div class="container margin-limit">
    @include('_partials.sessionmsg')
</div>

<div class="container">
    <h4 class="text-center text-success text-2">Our Blog</h4>

    <div class="card p-4 mb-4">
        @foreach ($blogs as $blog)

        <h3 class="text-uppercase"> {{$blog->title}} </h3>
        <div class="row my-2">
            <div class="col-md-3">
                <div class="img-container">
                    <img src="{{asset("images/" . $blog->image)}}" alt="user" class="image-fluid" height="200"
                        width="200">
                </div>
            </div>
            <div class="col-md-9">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        {!!$blog->body!!}
                    </div>

                </div>
                <h6 class="text-mutted mt-2">
                    <strong>Posted By:</strong> {{$blog->name}}
                </h6>
                <span class="text-mutted text-1">{{$blog->created_at}}</span>
                <ul>
                    <ul Clickable="true" onclick="func()"> <i class="fas fa-2x fa-close"></i> </ul>
                    <span id="count" class="fab">0</span>
                    {{-- <span class="fab fa-2x fa-twitter"></span> --}}

                </ul>
                <ul>

                </ul>
            </div>
        </div>
        <hr />
        @endforeach
    </div>

    <ul class="justify-content-end">
        {{$blogs->links()}}
    </ul>
</div>
@endsection
@push('script')
<script>
    $(document).ready(function(){
        $("#count").innerHTML="jdkjl";
       $(".fas").click(function(){
           $("#count").innerHTML ="VAR";
        //   alert("hello");
       });
   });
</script>
<script>
    func=()=>{
        alert("helloooooo");
var select = document.getElementById('.fab');
select.innerHTML="SELECTED";
  }
</script>
@endpush