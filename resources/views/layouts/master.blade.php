<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('components.head')
</head>

<body class="viewport{{ $title ? strtolower(' page-'.$title) : null }}">

    <div id="scroll-container" class="scroll-container">
        @include('components.nav')

        <main>
            @yield('content')
        </main>
        @include('components.footer')
    </div>


    <script>
        const data = @json(config('data'));
        const page = "{{ strtolower($title) }}"
    </script>

    <script src="{{asset('js/all.js')}}"></script>
</body>

</html>