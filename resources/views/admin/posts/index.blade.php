@extends('layouts.admin')

@section('content')

    <h1>Posts</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body/th>
            <th>Created At/th>
            <th>Updated At/th>
        </tr>
        </thead>
        <tbody>

        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}
                    <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/200x200' }}" alt="{{$post->title}}"/>
                    <td>{{$post->user->name}}
                    <td>{{$post->category ? $post->category->name : 'Uncategorized'}}
                    <td>{{$post->title}}
                    <td>{{$post->body}}
                    <td>{{$post->created_at->diffForHumans()}}
                    <td>{{$post->updated_at->diffForHumans()}}
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@endsection
