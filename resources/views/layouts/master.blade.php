<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('components.head')
</head>

<body class="viewport{{ $title ? strtolower(' page-'.$title) : null }}">

    <div id="scroll-container" class="scroll-container">
        <main>
            @yield('content')
        </main>
        @include('components.footer')
    </div>


    <script>
        const page = "{{ strtolower($title) }}"
    </script>

    <script src="{{asset('js/all.js')}}"></script>
</body>

</html>