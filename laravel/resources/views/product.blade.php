@extends('layouts.app')

@section('title', 'prodotti')

@section('content')
    <div class="linea-prodotti">

        @foreach ($formati as $index => $item)

            <h2>{{ $index }}</h2>

            @foreach ($item as $key => $tipologie)

            <div class="box">
                <img src="{{ $tipologie['src'] }}" alt="">
                <a href="{{ route('specifica-prodotto', ['id' => $key]) }}" class="description">{{ $tipologie['titolo'] }} - {{ $tipologie['tipo'] }}</a>
            </div>

            @endforeach

        @endforeach
    </div>
        
    
@endsection
