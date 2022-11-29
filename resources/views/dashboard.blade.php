@extends('layout.app')

@section('content')
<div>
    <h1>Welcome to dashboard</h1>
    <form action="{{route('logout')}}">
        <button type="submit">Logout</button>
    </form>
</div>
@endsection