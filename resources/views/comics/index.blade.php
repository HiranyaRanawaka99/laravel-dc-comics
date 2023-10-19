@extends('layouts.app')

@section('font-awesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

@endsection

@section('main-content')

<div class="container mt-4 ">
    <h1> COMICS DATABASE </h1>

    <a  class="btn btn-success my-4" href=" {{ route ('comic.create') }}"> Inviaci il tuo fumetto </a>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="row"> ID</th>
                <th scope="col"> Title</th>
                <th scope="col"> Price</th>
                <th scope="col"> Type </th>   
                <th scope="col"> Info</th>  
                <th scope="col"> Delete</th>  
            </tr>    
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr class= "class-active">
                <td scope="row"> {{ $comic->id }}</td>
                <td scope="col"> {{ $comic->title}}</td>
                <td scope="col"> ${{ $comic->price }}</td>
                <td scope="col"> {{ $comic->type }}</td>
                <td scope="col">
                    <a href= "{{ route('comic.show', $comic)}}">
                        <i class="fa-solid fa-eye"></i> 
                    </a>
                </td>


                <td scope="col">
                    <form action="{{ route('comic.destroy', $comic)}}" method="POST">
                    @csrf
                    @method('DELETE')
                        <button>
                            <i class="fa-solid fa-trash text-danger"></i>
                        </button>
                    </form>
                <td>
            <tr>
            @endforeach
        </tbody>
        </table>
</div>

    

@endsection