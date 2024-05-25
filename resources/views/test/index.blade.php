@extends('main')
@section('title')
index
@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

@section('content')
<div class="container mt-4 ">
    <a href="{{ route('create')}}" class="btn btn-primary me-1">Ajouter une personne</a>
    <a href="{{ route('dashboard')}}"class="btn btn-success me-1">Page accueil</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Sexe</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($data as $info)
                <th scope="row">{{$info->id}}</th>
                <td>{{$info->name}}</td>
                <td>{{$info->age}}</td>
                <td>{{$info->sexe}}</td>
                <!-- <td>
                        @if($info->age>=18)
                        Majour
                        @elseif($info->age<=18) Mineur @else Error< @endif </td> -->
                <td><a style="color: green" ; href="{{ route('editp',$info->id)}}">modifier</a>
                    <a style="color: red;" href="{{ route('deletep',$info->id)}}">suprimer</a>
                </td>

            </tr>


            @endforeach

        </tbody>
    </table>
    {{$data->links()}}
</div>


@endsection