@extends('admin.base')
@section('title', $slider->exists ?'Modifier slider' : 'Ajouter slider')

@section('content')

<div class="col mt-3">
    <h1 class="text-center">{{$slider->exists ? 'Modification de slider ' : 'Ajout de slider'}}</h1>
    <form action="{{route($slider->exists ? 'admin.slider.update' : 'admin.slider.store',$slider)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method( $slider->exists ? 'put' : 'post')
        <div class="row ">
            @include('admin.shared.textarea',['class'=>'col','label'=>'Ajouter une premiere description','name'=>'description1','value'=>$slider->description1])
            @include('admin.shared.textarea',['class'=>'col','label'=>'Ajouter une seconde description','name'=>'description2','value'=>$slider->description2])
        </div>
        <div class="row">
            @include('admin.shared.fileInput',['name'=>'image','label'=>'Ajouter une image'])
        </div>
        <button class="btn btn-primary mt-3">
            @if ($slider->exists)
                Modifier
            @else
            Enregistrer
           @endif
        </button>
    </form>
</div>

@endsection