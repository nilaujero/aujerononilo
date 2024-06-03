@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="fw-bold">Add a new dog</h1>

            <form action="{{ route('dogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="breed">Breed</label>
                    <input type="text" name="breed" id="breed" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="size">Size</label>
                    <input type="text" name="size" id="size" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" name="color" id="color" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="height">Height</label>
                    <input type="text" name="height" id="height" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="text" name="weight" id="weight" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary px-5 my-3">Create</button>

                {{-- <a href="{{ route('dogs.index') }}" class="btn btn-primary m-2">Create</a> --}}
            </form>
        </div>
    </div>
@endsection
