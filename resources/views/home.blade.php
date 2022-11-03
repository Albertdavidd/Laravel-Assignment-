@extends('navbar')

@section('document_title', 'home')

@section('body')
    <div class="container-fluid">
        @foreach ($bikes as $b)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$b->bikeName}}</h5>
                <p class="card-text">{{$b->bikeDescription}}</p>
                <p class="card-text">{{$b->bikePrice}}</p>
            </div>
            <a href="/updateBike/{{$b->id}}">update</a>

            <form action="delete/{{$b->id}}" method="POST" >
                @csrf
                {{method_field('DELETE')}}
                <button type="submit">Delete</button>
            </form>
        </div>
        @endforeach
    </div>
@endsection