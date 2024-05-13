@php 
$class??= null;
$name??= '';
$type??='text';
$label??='';
$value ??='';
@endphp
<div @class(['form-group', $class]) >
    <label for="$name">{{$label}}</label>
    <textarea class="form-control  @error($name) is-invalid @enderror"  name="{{$name}}" id="{{$name}}"  style="width: 100%">{{old($name,$value)}}</textarea>

    @error($name)
    <div class="invalid-feedback">
        {{$message}}
    </div>
        
    @enderror
</div>
