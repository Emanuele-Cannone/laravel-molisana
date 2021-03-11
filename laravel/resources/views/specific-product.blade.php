@extends('layouts.app')

@section('content')
 
<div class="description-products">
    <h1>{{ $nomeAssociativo['titolo'] }}</h1>
    <img src="{{ $nomeAssociativo['src-h'] }}" alt="">
    <img src="{{ $nomeAssociativo['src-p'] }}" alt="">
</div>

@endsection
