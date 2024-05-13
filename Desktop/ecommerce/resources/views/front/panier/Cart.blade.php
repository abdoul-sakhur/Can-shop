@extends('front.panier.base')
@section('title','Panier')

    <!-- Cart items details -->
    @section('content')
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Produits</th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Action</th>
            </tr>
            @forelse ($panier as $pan )
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="{{$pan->options->image}}">
                        <div>
                            <p>{{$pan->name}}</p>
                            <small><b>{{ number_format($pan->price,thousands_separator:' ')}}</b></small>
                            <br>
                            <a href="{{route('cart.destroy',$pan->rowId)}}">Supprimer</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="{{$pan->qty}}"></td>
                <td><b>{{ number_format($pan->price * $pan->qty,thousands_separator:' ')}}</b></td>
                <td><a href="{{route('cart.update',$pan->rowId)}}" class="btn">Augmenter</a></td>
            </tr>
            @empty
                <div class="text">Panier vide</div>
            @endforelse
        
      
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Total</td>
                    <td> <b>{{$total}} F</b></td>
                </tr>
            
            </table>
        </div>
        <div class="checkout">
            <a href="{{route('payment')}}" class="btn">Passer la commande</a>
        </div>
            
        
        </div>
    @endsection


