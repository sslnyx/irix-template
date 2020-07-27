@extends('layouts.master', ['title' => ucwords(Route::currentRouteName()) ])

@section('content')

<section>
    <h1 class="text-uppercase">{{Route::currentRouteName()}}</h1>
</section>

<section>
    <div id="map" class="map"></div>
</section>

@push('custom-header-scripts')
<script src="https://maps.googleapis.com/maps/api/js?key={{env("GOOGLE_MAP_API_KEY")}}&libraries=&v=weekly" defer>
</script>
@endpush

@endsection