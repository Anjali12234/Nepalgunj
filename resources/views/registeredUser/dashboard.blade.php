@extends('registeredUser.layout.master')
@section('content')
<div class="content px-5 md:px-7 col-span-3 min-h-screen ">
<h1>Welcome {{ Auth::guard('registered-user')->user()->username }}</h1>
</div>
@endsection
