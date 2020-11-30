@extends('pages.master')
@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Hello</h1>
        <p class="lead">Tutorials</p>
        <hr class="my-4">
        <ul>
            @forelse ($tutos as $tuto)
                <li>{{ $tuto->name }}</li>
            @empty
                <h1>No records !</h1>
            @endforelse
        </ul>
    </div>
</div>
@endsection