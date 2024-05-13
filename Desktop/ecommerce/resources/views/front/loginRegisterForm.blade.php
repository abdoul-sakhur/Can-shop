@extends('front.base2')

@section('title','Connexion | inscription')
@section('content')

    <!-- Account Page -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="frontend/images/foot1.png" width="80%">
                </div>
                <div class="col-2">
                    
                    <div class="form-container">
                  
                        <div class="form-btn">
                            <span onclick="login()">Connexion</span>
                            <span onclick="register()">Inscription</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm" action="{{route('front.login')}}" method="POST">
                            @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error )
                                <li>{{$error}}</li>
                            @endforeach
                            </ul>
                        
                            @endif
                            @csrf
                            <input type="text" name="name" placeholder="Nom d'utilisateur">             
                            <input type="password" name="password" placeholder="Mot de pase">
                            <button type="submit" class="btn">Connexion</button>
                            <a href="">Mot de passe oublié</a>
                        </form>

                        <form id="RegForm" action="{{route('front.register')}}" method="post" >
                            @method('post')
                            @csrf
                            <input type="text" name="name" placeholder="Nom d'utilisateur">
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Mot de pase">
                            <button type="submit" class="btn">Inscription</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection