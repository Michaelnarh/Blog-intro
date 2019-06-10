@extends('layouts.master')
@push('stylesheet')
<link rel="stylesheet" href="{{asset("css/parsley.css")}}">
<link rel="stylesheet" href="{{asset("css/bootstrap3-wysihtml5.min.css")}}">
<link rel="stylesheet" href="{{asset("css/ionicons.min.css")}}">
<link rel="stylesheet" href="{{asset("css/AdminLTE.min.css")}}">
<link rel="stylesheet" href="{{asset("css/daterangepicker.css")}}">
<link rel="stylesheet" href="{{asset("css/daterangepicker.css")}}">
<link rel="stylesheet" href="{{asset("css/daterangepicker.scss")}}">
<link rel="stylesheet" href="{{asset("css/skin-blue.css")}}">
<link rel="stylesheet" href="{{asset("css/skin-purple.css")}}">
@endpush
@section('title'," | create blog")
    
@section('content')
<div class="container margin-limit">
   <h3>Create New Blog</h3>
   <hr>
{{-- <form action="{{url("/admin/blogs")}}" method="POST" enctype="multipart/form-data" >
          {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Title</label>
        <input name ="title"type="text" class="form-control">
    </div>
    <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
            <label for="body">Body</label>
            <textarea type="text" name="body" class="form-control"></textarea>
    </div>
    <div class="form-group">
            <label for="image">Select Image</label>
            <input type="file" name="image" class="form-control">
        </div>

    <input type="submit" value="submit" class=" btn  btn-primary ">
</form> --}}


     {!! Form::open(['route' =>'blogs.store','files'=>true, "method"=>"POST",'data-parsley-validate' => '' ]) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('title', 'Blog Title') }}
                            <!--  -->
                            {{ Form::text('title', null, ['class' => 'form-control','required'])}}
                           </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                <!--  -->
                                {{ Form::text('name', null, ['class' => 'form-control','required'])}}
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('body', 'Blog Content') }}
                            <!--  -->
                            {{ Form::textarea('body', null, ['class' => 'form-control textarea','required','data-parsley-maxlength'=>'255'])}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{Form::label('image',"Choose Image")}} {{ Form::file('image',['required'])}}
                        </div>
                    </div>
                </div>
            
                 {{-- {{Html::linkRoute("blogs.store","create New Blog",["class"=>"btn btn-primary form-control"])}}  --}}
                 {{Form::submit("Create New Blog",["class"=>"btn btn-primary "])}}

                {!! Form::close() !!}
              
</div>
    <div class="container">
        {!! Html::linkRoute("blogs.store","edit",["2","class"=>"btn btn-primary"])!!}
    </div>
@endsection
@push('script')
<script src="{{asset("js/parsley.min.js")}}"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
<script src="{{asset("js\adminlte.min.js")}}"></script>
<script src="{{asset("js/bootstrap3-wysihtml5.all.min.js")}}"></script>

    <script>tinymce.init({
        selector:'textarea',
        Plugin:"code link",
        menubar:false
        });</script>
<script>
    $(function () {
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
      });
</script>
@endpush