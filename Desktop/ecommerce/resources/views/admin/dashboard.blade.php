@extends('admin.base');
@section('title','Dashboard')

@section('content')
<div class="container">
    <h1 class="text-center "> Dashboard</h1>
    <div class="row mt-3">
    <style>
        .badge{
            box-shadow:3px 2px 8px #000 ;
        }
    </style>
        <div class="col">
            <h1 class="badge bg-success p-md-5 " style="font-size:20px;">Nombre de vêtements
            <br>
            <br>
            {{$vetement}}
            </h1>
        
        </div>
        <div class="col">
            <h1 class="badge bg-success p-md-5  " style="font-size:20px;">Nombre de Chaussures
                <br>
                <br>
                {{$chaussure}}
             </h1>
        </div>
        <div class="col">
            <h1 class="badge bg-success p-md-5 " style="font-size:20px;">Nombre d'accessoires
                <br>
                <br>
                {{$accessoire}}
             </h1>
        </div>
    </div>
    <div class="row mt-4">

        <div class="col">
            <h1 class="badge bg-success p-md-5 " style="font-size:20px;">Nombre de produits electroniques

            <br>
            <br>
       0
            </h1>
        
        </div>
        <div class="col">
            <h1 class="badge bg-success p-md-5 " style="font-size:20px;">Nombre de produits de maquillages
            <br>
            <br>
            0
            </h1>
        
        </div>
    
    </div>
    
</div>
@endsection