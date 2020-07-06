<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>
    @isset($title)
    {{ $title }} |
    @endisset
    {{ config('app.name') }}
</title>

{{-- <link rel="icon" type="image/png" href="{{asset('/img/favicon.png')}}" /> --}}
@stack('custom-header-scripts')

<link rel="stylesheet" href="{{asset("/css/all.css")}}">