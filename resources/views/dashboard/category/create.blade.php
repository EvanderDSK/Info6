@extends ('layouts.master')
@section('content')
@include('fragments.validation-errors')
@include('fragments.session')


<form method="POST" action="{{route('category.store')}}">
    @csrf
    @include('dashboard.category._form')
</form>


@endsection