@extends('layout.app')

@section('content')
<div class="mt-5">
    <h1>Register</h1>
<form class="mt-5" action="{{route('register')}}" method="POST">
    @csrf
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="NameHelp">
    @error('name')
    <span class="invalid-feedback">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp">
    @error('email')
    <span class="invalid-feedback">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
    @error('password')
    <span class="invalid-feedback">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection