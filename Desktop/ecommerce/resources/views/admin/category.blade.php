@extends('admin.base');
@section('title','Categories');
@section('content')
<div class="row">

    <div class="col">
        
   

        <table class="table table-triped">
            <thead>
                <tr>
                    
                    <th>titre</th>
                    <th class="text-end">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category )
                <tr>
                  
                    <td>{{$category->title}}</td>
                    <td class="d-flex justify-content-end">
                        <a href="{{route('admin.category.edit',$category)}}" class="btn btn-primary m-1">Editer</a>
                        <form action="{{route('admin.category.destroy',$category)}}" class="m-1" method="POST">
                            @csrf
                        @method('delete')
                        <button class="btn btn-danger">Supprimer</button>
                        </form>
                        
                    </td>
                </tr>
                @empty
                    <div class="alert alert-secondary" role="alert">
                        Pas de categorie disponible
                    </div>
                @endforelse
                
            </tbody>
        
        </table>
        {{$categories->links()}}
    </div>
  
</div>
@endsection