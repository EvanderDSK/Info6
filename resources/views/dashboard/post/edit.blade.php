@extends('layouts.master')

@section('content')
@include('fragments.validation-errors')
@include('fragments.session')

<form method="POST" action="{{route('post.update')}}">
    @csrf
    @include('dashboard.post._form')
</form>

@endsection