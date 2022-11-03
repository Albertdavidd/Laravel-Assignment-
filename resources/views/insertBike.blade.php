@extends('navbar')

@section('document_title', 'home')

@section('body')
<div class="d-flex flex-column align-items-center mt-4">
    <p id="title" class="fs-1 fw-bold">Insert Bike</p>
    {{-- enctype --}}
    <form method="POST" enctype="multipart/form-data" action="/storeBike" class="d-flex flex-column align-items-center">
            {{-- CSRF --}}
            @csrf
           
            <div class="mb-3 w-100">
                <label for="InputName" class="form-label">Bike Name</label>
                <input type="text" class="form-control" name="nameValue" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 w-100">
                <label for="inputPrice" class="form-label">Bike Price ($)</label>
                <input type="text" class="form-control" name="priceValue" id="exampleInputPassword1">
            </div>
            <div class="mb-3 w-100">
                <label for="inputDescription" class="form-label">Bike Description</label>
                <textarea type="textarea" class="form-control" id="exampleInputPassword1" name="descValue"></textarea>
            </div>
            <div class="mb-3 w-100">
                <label for="inputBrand">Bike Brands</label>
                <select name="bikeBrand" class="form-select mt-2" aria-label="Default select example">
                    {{-- options --}}
                    @foreach ($brands as $b)
                        <option value="{{$b->brandId}}">{{$b->brandName}} </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="inputImage" class="form-label">Bike Image</label>
                <input name="image" class="form-control" type="file" id="formFile">
            </div>

            {{-- error message --}}

            <button type="submit" class="btn btn-success">submit</button>
    </form>
</div>

@endsection