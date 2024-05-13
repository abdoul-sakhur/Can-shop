@extends('admin.base')
@section('title','Ajouter produit')

@section(('content'))
<div class="col mt-3 align-self-center">
    <h1 class="text-center">{{$product->exists ? 'Modification du produit' : 'Ajout d\'un produit'}}</h1>
    <form action="{{route($product->exists ? 'admin.product.update' : 'admin.product.store',$product)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method($product->exists ? 'put' :'post')
        <div class="row">
            @include('admin.shared.input',['class'=>'col','label'=>'Entrez le nom du produit','name'=>'title','value'=>$product->title])  
            @include('admin.shared.input',['class'=>'col','type'=>'number','label'=>'Entrez le prix','name'=>'price','value'=>$product->price])  
        </div>
        <div class="row">
            @include('admin.shared.textarea',['class'=>'col','label'=>'Entrez une description concernant le produit','name'=>'description','value'=>$product->description])
        </div>
        <div class="row">
            @include('admin.shared.fileInput',['class'=>'col','label'=>'Choisissez une image','name'=>'image'])
        </div>
        <div class="row">
            @include('admin.shared.select',['name'=>'listCategory','label'=>'Choisissez une categorie','value'=>$product->categories()->pluck('categories.id'),'categories'=>$categories])
        </div>
       
        <div class="row mt-3">
            <div class="col-mb-2">
                @include('admin.shared.toggle',['name'=>'status','label'=>'Disponible en stock ?','value'=>$product->status])
            </div>
       
        </div>              
       
        <button class="btn btn-primary mt-3">
            @if ($product->exists)
                Modifier
            @else
            Enregister
            @endif
        </button>
    </form>
</div>

@endsection