@extends('layouts.app')

@section('content')
    <p>io sono home</p>
    <ul>
        <li><a href="{{ route('Home') }}">home</a></li>
        <li><a href="">prodotti</a></li>
        <li><a href="">novità</a></li>
    </ul>
@endsection
