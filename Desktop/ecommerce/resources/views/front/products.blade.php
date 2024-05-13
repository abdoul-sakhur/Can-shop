@extends('front.base')
@section('title','Les produits')
@section('content')


<div class="small-container">
    <div class="row row-2">
        <h2>@yield('title')</h2>
        <div class="container-dropdown">
            <button class="btn-drop"  onclick="dropDown()">Categeories</button>
        <div class="dropd-down" id="dropdown">
            {{-- @if (is_iterable($categories)) --}}
            @foreach ($categories2 as $category )
			<li><a href="{{route('products/category/',['id'=>$category->id])}}" >{{$category->title}}</a></li>
            @endforeach
            {{-- @endif --}}
           
        </div>
      </div>
     
    </div>
    <div class="row">

        @foreach ($products as $product )
            @include('front.frontComponents.cards')
        @endforeach
       
    </div>
{{$products->links()}}
</div>

<script>
    
function dropDown(){
    document.getElementById('dropdown').classList.toggle('show')
}

</script>

@endsection