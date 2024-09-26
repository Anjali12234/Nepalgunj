@extends('registeredUser.layout.master')
@section('content')
<h1>Welcome {{ Auth::guard('registered-user')->user()->username }}</h1>
@endsection
