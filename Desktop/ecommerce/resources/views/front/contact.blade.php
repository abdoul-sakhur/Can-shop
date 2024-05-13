@extends('front.base2')
@section('title','Contact')
@section('content')
<div class="container">
    <div class="row">
        <h1>Contactez-nous , pour plus d'information.</h1>
        <form action="">
            
            <label for="name">Nom </label>
            <input type="text" name="name">
            <label for="surname">Prenom</label>
            <input type="text" name="surname">
            <label for="Email">Email</label>
            <input type="text" name="email">
           
            <label for="comment">Commentaire</label>
            <textarea name="comments" id="comment" cols="30" rows="10"></textarea>
       <button class="btn">Envoyer </button>    
        </form>
    </div>
    <h1 id="h1_locaux">retrouvez-nous dans nos locaux.</h1>
    <div id="googleMap" class="maps">
        <iframe style="width:100%; height:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.3484886152573!2d-3.944188685234956!3d5.363694396109442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x38def91a0d0ae32f!2zNcKwMjEnNDkuMyJOIDPCsDU2JzMxLjIiVw!5e0!3m2!1sfr!2sci!4v1671528791898!5m2!1sfr!2sci" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   
    </div>
</div>

@endsection