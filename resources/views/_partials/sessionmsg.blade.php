@if(Session::has("success"))
<div class="alert alert-success">
    
    <span>success</span> {{Session::get("success")}}
</div>
@endif
@if(count($errors)>0)
   <ul class="alert alert-danger">
       @foreach ($errors as $error)
          <li>$error</li>  
       @endforeach
   </ul>
@endif