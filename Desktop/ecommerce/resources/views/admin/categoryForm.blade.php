@extends('admin.base')
@section('title','AjouterCategorie')


@section('content')


    <div class="col mt-3">
        <form action="{{route($category->exists ? 'admin.category.update' : 'admin.category.store',$category)}}" method="post">
            @csrf
            @method( $category->exists ? 'put' : 'post')
            <div class="row ">
                @include('admin.shared.input',['type'=>'text','class'=>'col','label'=>'Ajouter une categorie','name'=>'title','value'=>$category->title])
            </div>
            <button class="btn btn-primary mt-3">
                @if ($category->exists)
                    Modifier
                @else
                Enregistrer
               @endif
            </button>
        </form>
    </div>

@endsection