@extends('layouts.master')
@section('title'," | create blog")
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
@section('content')
<div class="container margin-limit">
   <h3>Edit Blog</h3>
   <hr>
   {{ Form::model($blog , ['route' =>["blogs.update", $blog->id],'files'=>true, "method"=>"PUT","data-parsley-validate"=>""]) }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('title', 'Blog Title') }}
                            <!--  -->
                            {{ Form::text('title', $blog->title, ['class' => 'form-control',"required"])}}
                           </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                <!--  -->
                                {{ Form::text('name', $blog->name, ['class' => 'form-control',"required"])}}
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('body', 'Blog Content') }}
                            <!--  -->
                            {!! Form::textarea('body', $blog->body, ['class' => 'form-control',"requird"])!!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{Form::label('image',"Choose Image")}} {{ Form::file("image",["required"])}}
                        </div>
                    </div>
                </div>
            
                {{Form::submit("Edit Blog",["class"=>"btn btn-primary "])}}

                {{ Form::close() }}
            
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