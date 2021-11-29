@extends('layouts.main')

<!-- created and coded by Andriatama Bagaskara -->
@section('content')
<div class="d-flex flex-column justify-content-center">
    <h2 class="bg-warning pb-2 pt-2">Book List</h2>
    <table class="table justify-space-between">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
            </tr>
        </thead>
        <tbody class="bg-light">
            @foreach($book as $val)
            @if($book != NULL)
            <tr>
                <td><a style="text-decoration: none; color: black" href="/detail/{{$val->id}}">{{$val->title}}</a></td>
                <td><a style="text-decoration: none; color: black" href="/detail/{{$val->id}}">{{$val->detail->author}}</a></td>
            </tr>
            @else
            <p>TIDAK ADA BUKU!</p>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection