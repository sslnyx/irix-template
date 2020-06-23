@extends('layout.master', ['title' => ucwords(Route::currentRouteName()) ])

@section('content')

<h1>{{Route::currentRouteName()}}</h1>



@endsection