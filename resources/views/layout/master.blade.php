<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @isset($title)
        {{ $title }} |
        @endisset
        {{ config('app.name') }}
    </title>
    {{-- <link rel="icon" type="image/png" href="{{asset('/img/landing/favicon.png')}}" /> --}}

    <link rel="stylesheet" href="{{asset("/css/all.css")}}">
</head>

<body class="viewport{{ $title ? strtolower(' page-'.$title) : null }}">

    <div id="scroll-container" class="scroll-container">
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
    </div>


    <script>
        const page = "{{ strtolower($title) }}"
    </script>

    <script src="{{asset('js/all.js')}}"></script>
</body>

</html>