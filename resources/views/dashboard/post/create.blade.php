@extends('layouts.master')

@section('content')
@include('fragments.validation-errors')
@include('fragments.session')

<form method="POST" action="{{route('post.store')}}">
    @csrf
    @include('dashboard.post._form')
</form>

@endsection