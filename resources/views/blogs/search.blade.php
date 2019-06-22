@extends('layouts.master')
@section("title","| Search")
@section('content')
<div class="container margin-limit">
    @include('_partials.sessionmsg')
</div>

<div class="container">
    @include('_partials.securedelete')
    <table class="table">
        <div class="row">
            <thead>Searched Name</thead>
        </div>
        <tr>
            <th class="text-3"> #</th>
            <th class="text-3"> name</th>
            <th class="text-3"> title</th>
            <th class="text-3"> body</th>
            <th class="text-3">image</th>
            <th class="text-3"></th>
        </tr>

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
    </table>
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