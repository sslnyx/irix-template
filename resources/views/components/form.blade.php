<form id="reg-form" method="POST" action="">

    @php
    $formData = config('data.form');
    @endphp

    @foreach ($formData as $item => $value)

    @if ($value["type"] != "select")

    <div class="form-group">
        <input name="{{$item}}" type="{{$value["type"]}}" class="form-control" id="{{$item}}"
            placeholder="{{$value["ph"]}}" @if($value["req"]) required @endif>
    </div>

    @else

    <div class="form-group">
        <select name="{{$item}}" type="{{$value["type"]}}" class="form-control" id="{{$item}}" @if($value["req"])
            required @endif>
            <option selected disabled value="">{{$value["ph"]}}</option>
            @foreach ($value["option"] as $option => $option_value)
            <option value="$option_value">{{ $option. " " . $option_value }}</option>
            @endforeach
        </select>
    </div>

    @endif


    @endforeach

    <button type="submit" class="btn btn-primary mb-2">submit</button>
    <div class="sk-pulse d-none"></div>

</form>

@push('custom-header-scripts')
<script>
   const siteKey =  "{{env('RECAPTCHA_SITE_KEY')}}";
</script>
<script src="https://www.google.com/recaptcha/api.js?render={{env('RECAPTCHA_SITE_KEY')}}"></script>
@endpush