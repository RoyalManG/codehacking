@extends('layouts.admin')

@section('content')

    <h1>Users</h1>

    @if(Session::has('deleted_user'))
        <div class="alert alert-success">
            <p>{{session('deleted_user')}}</p>
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>

        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}
                    <td><img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/200x200'}}" height="50" alt="{{$user->name}}"></td>
                    <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@endsection
