@extends('front.panier.base')

@section('title',$product->title)


@section('content')

<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="{{$product->getImageUrl()}}">

            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="{{$product->getImageUrl()}}">
                </div>
                <div class="small-img-col">
                    <img src="{{$product->getImageUrl()}}">
                </div>
                <div class="small-img-col">
                    <img src="{{$product->getImageUrl()}}">
                </div>
                <div class="small-img-col">
                    <img src="{{$product->getImageUrl()}}">
                </div>
            </div>

        </div>
        <div class="col-2">
        
            <h1>{{$product->title}}</h1>
            <h4>{{number_format($product->price,thousands_separator :' ')}} F</h4>
        
       
            <a href="{{route('cart.add',$product->id)}}" class="btn">Ajouter au panier</a>

            <h3>description du produit<i class="fa fa-indent"></i></h3>
            <br>
            <p>{{$product->description}}</p>
        </div>
    </div>
</div>



@endsection