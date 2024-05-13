<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Connexion | administration</title>

</head>
<body>
    <style>
     
        #formRow{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            
        }
        #form{
            background: #f1f1f1;
            padding: 10px;
            border-radius: 5px;

        }

    </style>
    <div  class="container">
       <div  id="formRow" class="row">
        <div id="form" class="col-6 mt-5">
            <h1 class="text-center">CONNEXION</h1>
            <form  class="mt-5 mx-8"  action="{{route('connect')}}" method="post">
                @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            
                @endif
                @csrf
            
                <div class="col-12">
                    @include('admin.shared.input',['label'=>'Nom d\'utilisateur','name'=>'name'])
                    @include('admin.shared.input',['label'=>'Mot de passe ','name'=>'password','type'=>'password'])
                </div>
               <button  class="btn btn-primary mt-3">Se connecter</button>
            </form>
            <p class="text-center">vous n'avez pas de compte ? cliquez ici pour <a href="#">creer un compte</a></p>
        </div>
        
    </div>
    </div>

</body>
</html>