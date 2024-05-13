@extends('admin.base')
@section('title','produits')
@section('content')
<div class="col">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Image</th>
                <th>Status</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product )
                <tr>
              
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td width="80px">{{number_format($product->price, thousands_separator:' ')}}</td>
                    <td><img width="150px" height="150px" src="{{$product->getImageUrl()}}" class="rounded mx-auto d-block" ></td>
                    <td>
                        @if ($product->status==0)
                            <button class="btn btn-danger">Stocks epuise</button>
                        @else 
                        <button class="btn btn-success">Stocks disponible</button>
                        @endif
                    </td>
                    <td>
                        <td class="d-flex justify-content-end">
                            <a href="{{route('admin.product.edit',$product)}}" class="btn btn-primary m-1">Editer</a>
                            <form action="{{route('admin.product.destroy',$product)}}" class="m-1" method="POST">
                                @csrf
                            @method('delete')
                            <button class="btn btn-danger">Supprimer</button>
                            </form>
                            
                        </td>
                    </td>
                </tr>
            @empty
                <div class="alert alert-secondary">
                    Pas de produits pour l'instant !
                </div>
            @endforelse
        </tbody>
    </table>
    {{$products->links()}}

</div>

@endsection