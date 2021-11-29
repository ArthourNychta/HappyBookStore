@extends('layouts.main')

<!-- created and coded by Andriatama Bagaskara -->
@section('content')
<div class="d-flex flex-column justify-content-center">
    <h2 class="bg-warning pb-2 pt-2">Book Detail</h2>
    <br />
    <p>Title : {{$book->title}}</p>
    <br />
    <p>Author : {{$book->detail->author}}</p>
    <br />
    <p>Publisher : {{$book->detail->publisher}}</p>
    <br />
    <p>Year : {{$book->detail->year}}</p>
    <br />
    <p>Description :</p>
    <br />
    <p>{{$book->detail->description}}</p>

</div>
@endsection