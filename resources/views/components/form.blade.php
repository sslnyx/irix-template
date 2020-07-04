<form action="">

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
            <option value="$option_value">{{$option_value}}</option>
            @endforeach
        </select>
    </div>

    @endif


    @endforeach

    <button type="submit" class="btn btn-primary mb-2">submit</button>

</form>