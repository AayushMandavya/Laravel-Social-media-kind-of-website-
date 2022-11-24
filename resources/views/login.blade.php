@extends('layout.app')

@section('content')
<div class="container" style="height: 90%">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col-md-5 mt-5">
   
<div class="box shadow p-4">
    
<h1 class="text-center">Login</h1>
    
<form class=" d-flex flex-column mt-5" action="{{route('loginuser')}}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Enter your email here.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password"  name= "password" class="form-control" id="exampleInputPassword1">
    <div id="passwrodHelp" class="form-text">Enter your password here.</div>

  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@if(Session::has('fail'))
<div class="alert alert-danger mt-2" role="alert">
{{session::get('fail')}}
</div>
@endif
</div>
</div>
</div>
</div>
@endsection
