@extends('layout.app')
@section('content')

<div class="container  mt-5 pt-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-row justify-content-between align-text-center">
                <h1 class="fw-bold">List of Dogs</h1>
                <a href="{{route('dogs.create')}}" class="btn btn-primary px-5 py-3">Add Available Dogs</a>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">breed</th>
                    <th scope="col">age</th>
                    <th scope="col">size</th>
                    <th scope="col">color</th>
                    <th scope="col">height</th>
                    <th scope="col">weight</th>
                    <th scope="col">image</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                @foreach ($dogs as $key => $dogs)
                <tr>
                    <th scope="row">{{$key +=1}}</th>
                    <td>{{$dogs->name}}</td>
                    <td>{{$dogs->breed}}</td>
                    <td>{{$dogs->age}}</td>
                    <td>{{$dogs->size}}</td>
                    <td>{{$dogs->color}}</td>
                    <td>{{$dogs->height}}</td>
                    <td>{{$dogs->weight}}</td>
                    <td>
                        @if($dogs->image)
                            <img src="{{ asset('storage/'. $dogs->image) }}" alt="{{$dogs->name}}" width="50" height="50">
                        @else
                            No image
                        @endif
                    </td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <a href="{{ route('dogs.edit', $dogs->id) }}" class="btn btn-primary m-1">Edit</a>
                            <form action="{{ route('dogs.destroy', $dogs->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">Del.</button>
                            </form>
                        </div>
                    </td>
                  </tr>
                  @endforeach
        </div>
    </div>
</div>

@endsection
