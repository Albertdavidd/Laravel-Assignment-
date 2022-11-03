@extends('navbar')

@section('document_title', 'update')

@section('body')
<div class="d-flex flex-column align-items-center mt-4">
    <p id="title" class="fs-1 fw-bold">Update Bike</p>
    {{-- enctype --}}
    <form method="POST" enctype="multipart/form-data" action="/update/{{$modelBike->id}}" class="d-flex flex-column align-items-center">
            {{-- CSRF --}}
            @csrf
            {{-- method_field() --}}
            {{method_field('PUT')}}
            <div class="mb-3 w-100">
                <label for="InputName" class="form-label">Bike Name</label>
                <input type="text" class="form-control" name="nameValue">
            </div>
            <div class="mb-3 w-100">
                <label for="inputPrice" class="form-label">Bike Price ($)</label>
                <input type="text" class="form-control" name="priceValue">
            </div>

            {{-- error message --}}

            <button type="submit" class="btn btn-success">submit</button>
    </form>
</div>
@endsection