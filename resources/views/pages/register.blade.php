@extends('layouts.master', ['title' => ucwords(Route::currentRouteName()) ])

@section('content')

<h1 class="text-uppercase">{{Route::currentRouteName()}}</h1>



@endsection