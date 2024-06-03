@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="fw-bold">Edit a dog</h1>

            <form action="{{ route('dogs.update', $dogs->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required value="{{ $dogs->name }}">
                </div>

                <div class="form-group">
                    <label for="breed">Breed</label>
                    <input type="text" name="breed" id="breed" class="form-control" required value="{{ $dogs->breed }}">
                </div>

                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" class="form-control" required value="{{ $dogs->age }}">
                </div>

                <div class="form-group">
                    <label for="size">Size</label>
                    <input type="text" name="size" id="size" class="form-control" required value="{{ $dogs->size }}">
                </div>

                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" name="color" id="color" class="form-control" required value="{{ $dogs->color }}">
                </div>

                <div class="form-group">
                    <label for="height">Height</label>
                    <input type="text" name="height" id="height" class="form-control" required value="{{ $dogs->height }}">
                </div>

                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="text" name="weight" id="weight" class="form-control" required value="{{ $dogs->weight}}">
                </div>

                {{-- <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control" required value="{{ $dogs->image }}">
                </div> --}}


                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div
        @endsection
