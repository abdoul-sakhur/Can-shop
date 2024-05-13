@php 
$class??= null;
$name??= '';
$type??='text';
$label??='';
$value ??='';
@endphp
<div @class(['form-group', $class]) >
    <label for="$name">{{$label}}</label>
<select class=" @error($name) is-invalid @enderror"  name="{{$name}}" id="select-state"  >
    
    @foreach ($categories as $id =>$val  )
        <option @selected($value->contains($id)) value="{{$id}}">{{$val}}</option>
    @endforeach
    
    </select>




    @error($name)
    <div class="invalid-feedback">
        {{$message}}
    </div>
        
    @enderror
</div>
