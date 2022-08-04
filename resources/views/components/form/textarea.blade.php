@props(['disabled' => false, 'key', 'label'=>'', 'type' => 'text', 'value' => '', 'class'=>''])

<div class="row  {{$class?$class:''}}">
    <div class="col-12 col-md-4">
        <label for="{{$key}}" class="form-label mt-1 mb-0">{{$label}}</label>
    </div>
    <div class="col-12 col-md-8">
        <textarea class="form-control" name="{{$key}}">{{$value}}</textarea>
        @error($key)
        <div class="form-text text-danger">
            {{$message}}
        </div>
        @enderror
    </div>
</div>
