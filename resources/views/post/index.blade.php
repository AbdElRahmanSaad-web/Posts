
@extends('layouts.app')

@section('content')
<div class="container">
    <a type="submit" href="{{ route('posts.create') }}" class="btn btn-primary mt-3 w-100">Insert</a>
    @foreach ($posts as $post)
        <div class="card text-center mt-4">
            <div class="card-header">
                @if ($post->created_at == $post->updated_at)
                    Not Updated
                @else
                    Updated at {{ $post->updated_at }}
                @endif
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->body }}</p>
                <img class="d-inline-block photo" src="{{ asset('images/'.$post->image) }}">
                <div class="my-3">
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-success">Show</a>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
            <div class="card-footer text-muted">
                created at {{ $post->created_at }}
            </div>
        </div>
    @endforeach
</div>
@endsection
