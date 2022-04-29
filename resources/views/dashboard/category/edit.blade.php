@extends('layouts.master')
@section('content')

@include('fragments.validation-errors')
@include('fragments.session')

<form method="POST" action="{{ route('category.update', $category->id) }}">
    @csrf
    @method("PUT")
    @include('dashboard.category._form')
</form>
@endsection