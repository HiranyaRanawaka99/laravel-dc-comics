@extends('layouts.app')

@section('font-awesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

@endsection

@section('main-content')

<div class="container mt-4 ">
    <h1> COMICS DATABASE </h1>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="row"> ID</th>
                <th scope="col"> Title</th>
                <th scope="col"> Description</th>
                <th scope="col"> Price</th>
                <th scope="col"> Series </th>
                <th scope="col"> Sale_date</th>
                <th scope="col"> Type </th>   
                <th scope="col">  </th>   
            </tr>    
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr class= "class-active">
                <td scope="row"> {{ $comic->id }}</td>
                <td scope="col"> {{ $comic->title}}</td>
                <td scope="col"> {{ $comic->description }}</td>
                <td scope="col"> ${{ $comic->price }}</td>
                <td scope="col"> {{ $comic->series }}</td>
                <td scope="col"> {{ $comic->sale_date }}</td>
                <td scope="col"> {{ $comic->type }}</td>
                <td scope="col"><i class="fa-solid fa-eye"></i> </td>
            <tr>
            @endforeach
        </tbody>
        </table>
</div>

    

@endsection