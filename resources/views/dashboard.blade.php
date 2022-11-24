@extends('layout.app')

@section('content')
<div class="mt-5">
<h1>Dashboard</h1>
</div>
<form action="{{route('logout')}}">
    <button type="submit">LOGOUT</button>
</form>
@endsection
