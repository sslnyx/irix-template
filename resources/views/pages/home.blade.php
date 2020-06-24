@extends('layouts.master', ['title' => ucwords(Route::currentRouteName()) ])

@section('content')

<section>
    <h1 class="text-uppercase">{{Route::currentRouteName()}}</h1>
</section>



@endsection