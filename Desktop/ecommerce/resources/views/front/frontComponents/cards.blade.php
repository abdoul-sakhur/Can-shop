<div class="col-4">
    <img src="{{$product->getImageUrl()}}">
    <h4>{{$product->title}}</h4>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
    </div>
    <p>{{number_format($product->price,thousands_separator :' ')}} F</p>
    <a href="{{route('front.show_product',$product)}}" class="btn">Voir le produit &#8594;</a>
</div>