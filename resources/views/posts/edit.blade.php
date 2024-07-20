@extends('layout')

@section('content')

    <div class="card mt-5">
        <h2 class="card-header">Edit Item</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('posts.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>

            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label"><strong>Name:</strong></label>
                    <input
                        type="text"
                        name="title"
                        value="{{ $post->title }}"
                        class="form-control @error('title') is-invalid @enderror"
                        id="name"
                        placeholder="Name">
                    @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="detail" class="form-label"><strong>Description:</strong></label>
                    <textarea
                        class="form-control @error('description') is-invalid @enderror"
                        style="height:150px"
                        name="description"
                        id="detail"
                        placeholder="Description">{{ $post->description }}</textarea>
                    @error('description')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
            </form>

        </div>
    </div>
@endsection
