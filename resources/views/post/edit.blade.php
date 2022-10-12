<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets\css\bootstrap.css') }}">
    <title>Edit Post</title>
</head>
<body>
    <div class="container w-50 m-auto mt-5">
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="title" class="form-label">Post Title</label>
                <input type="text" class="form-control" id="title" name='title' value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Post Content</label>
                <textarea class="form-control" name='body' id="body">{{ $post->body }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <input type="file" class="form-control" name='image' id="image">
                <img src="{{ asset('images/'.$post->image) }}" width="200px" height="200px" alt="">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
