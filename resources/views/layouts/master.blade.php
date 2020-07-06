<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('components.head')
</head>

<body class="{{ $title ? strtolower(' page-'.$title) : null }}">
    <div class="viewport">
        <div id="scroll-container" class="scroll-container">
            @include('components.nav')

            <main>
                @yield('content')
            </main>
            @include('components.footer')
        </div>

    </div>


    <script>
        const data = @json(config('data'));
        const page = "{{ strtolower($title) }}"
    </script>

    <script src="{{asset('js/all.js')}}"></script>
</body>

</html>