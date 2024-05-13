@extends('front.panier.base')
@section('title','Paiement')

@section('content') 
<div class="row">
    
<form action="{{route('PaymentMethod')}}" method="post">
    @csrf
    @method('post')
    <h1 class="text-center">Formulaire de paiements</h1>
    <h5 class="">renseignez le formulaire et choisissez votre votre methode de paiements.</h5>
<div class="col">
    @include('admin.shared.input',['label'=>'Nom d\'utilisateur','name'=>'username','value'=>$username])
    @include('admin.shared.input',['label'=>'Email','type'=>'email','name'=>'email','value'=>$useremail])
</div>
<div class="col">
    @include('admin.shared.input',['label'=>'Adresse','name'=>'adresse'])
    @include('admin.shared.input',['label'=>'Date de livraison','type'=>'date','name'=>'heure_livraison'])
</div>
<div class="col">
    <button class="btn">payer en ligne</button>
    
   
</div>


</form>
<button class="btn">payer par whatsapp</button>
</div>


@endsection