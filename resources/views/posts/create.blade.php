@extends('layout')

@section('content')

    <div class="card mt-5">
        <h2 class="card-header">Add New Posts</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('posts.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>

            <form action="{{ route('posts.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label"><strong>Title:</strong></label>
                    <input
                        type="text"
                        name="title"
                        class="form-control @error('title') is-invalid @enderror"
                        id="name"
                        placeholder="Name">
                    @error('title')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label"><strong>Description:</strong></label>
                    <textarea
                        class="form-control @error('description') is-invalid @enderror"
                        style="height:150px"
                        name="description"
                        id="description"
                        placeholder="Description"></textarea>
                    @error('description')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
            </form>

        </div>
    </div>
@endsection
