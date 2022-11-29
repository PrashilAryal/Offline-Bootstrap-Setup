@extends('layout.app')

@section('content')
<div>
    <h1>Welcome to dashboard</h1>
    <form action="{{route('logout')}}">
        <button type="submit">Logout</button>
    </form>
</div>
<div class="container mt-4">
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Created by</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->user->name}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection