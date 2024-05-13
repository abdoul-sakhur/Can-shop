@extends('admin.base')
@section('title','Slider')
@section('content')
        <div class="row">

            @if (session('success'))
            <div class="alert alert-success">
        {{session('success')}}
            </div>
        @endif

        <div class="col">
            <table class="table table-striped">
        <thead>
            <tr>
                <th>Description primaire</th>
                <th>Description secondaire</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($sliders as $slider )
                <tr>
                    <td>{{$slider->description1}}</td>
                    <td>{{$slider->description2}}</td>
                    <td  width="80px"><img  width="80px" src="{{$slider->getImageUrl()}}" alt=""></td>
                    <td>
                        <td class="d-flex justify-content-end">
                            <a href="{{route('admin.slider.edit',$slider)}}" class="btn btn-primary m-1">Editer</a>
                            <form action="{{route('admin.slider.destroy',$slider)}}" class="m-1" method="POST">
                                @csrf
                            @method('delete')
                            <button class="btn btn-danger">Supprimer</button>
                            </form>
                            
                        </td>

                    </td>
                </tr>
            @empty
                <div class="alert alert-secondary">
                    Pas de slider pour le moment !
                </div>
            @endforelse

        </tbody>

            </table>
            {{$sliders->links()}}
        </div>

        </div>
        @endsection