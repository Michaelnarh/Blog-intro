@extends('layouts.master')
@section("title","| index")
@section('content')
<div class="container margin-limit">
        @include('_partials.sessionmsg')
</div>

<div class="container">
        @include('_partials.securedelete')
        <table class="table">
                <div class="d-inline-flex">
                        <ul>All Blogs</ul>
                        <ul>
                                <div class="justify-content-end">
                                        {!! Form::open(["route"=>"blogs.search", "method"=>'GET'])!!}
                                        <div class="row">
                                                <ul>

                                                        {{Form::text("search",null,["class"=>"form-control","placeholder"=>"search name"])}}
                                                </ul>
                                                <ul>

                                                        {{Form::submit("Search",["class"=>"btn btn-dark"])}}
                                                </ul>

                                        </div>
                                        {!! Form::close()!!}
                                </div>
                        </ul>
                </div>
                <tr>
                        <th class="mr-2"> #</th>
                        <th class="mr-2"> name</th>
                        <th class="mr-2"> title</th>
                        <th class="mr-2"> body</th>
                        <th class="mr-2">image</th>
                        <th class="mr-2"></th>
                </tr>
                @foreach ($blogs as $blog)
                <tr>
                        <div>
                                <td>{{$blog->id}}</td>
                                <td>{{$blog->name}}</td>
                                <td>{{$blog->title}}</td>
                                <td>{!! substr($blog->body ,0,30)!!}{{ strlen($blog->body) > 30 ? "...":""}}</td>
                                <td> <img src="{{ asset("images/" .$blog->image )}}" alt="user" height="35" width="35">
                                </td>
                                <th class="row">
                                        <div class="mr-1">
                                                {!! Form::open(["route"=>["blogs.show","$blog->id"],"method"=>"GET"])!!}
                                                {{Form:: submit('Show',["class"=>"btn btn-primary"])}}
                                                {!! Form::close()!!}
                                        </div>
                                        <div class="mr-1">
                                                {!! Form::open(["route"=>["blogs.edit","$blog->id"],"method"=>"GET"])!!}
                                                {{Form:: submit('Edit',["class"=>"btn btn-warning"])}}
                                                {!! Form::close()!!}
                                        </div>
                                        <div class="mr-1">
                                                {!!
                                                Form::open(["route"=>["blogs.destroy","$blog->id"],"method"=>"DELETE"])!!}
                                                {{Form:: submit('Delete',["class"=>"btn btn-danger delete"])}}
                                                {!! Form::close()!!}
                                        </div>

                                </th>
                        </div>
                <tr>
                        @endforeach

        </table>
        <div class="align-end">
                {{$blogs->links()}}
        </div>
</div>


@endsection

@push('script')
<script>
        $(document).ready(function(){
          $(".delete").click(function(){
             alert("Are you sure you want to delete");
          });
      });

  $
</script>
@endpush