@extends('layouts.app')

@section('title', 'prodotti')

@section('content')

    @foreach ($formati as $index => $item)

        <h2>{{ $index }}</h2>
 
    <div class="linea-prodotti">

        @foreach ($item as $key => $tipologie)

            <div class="box">
                <img src="{{ $tipologie['src'] }}" alt="">
                <a href="{{ route('specifica-prodotto', ['id' => $key]) }}" class="description">{{ $tipologie['titolo'] }} - {{ $tipologie['tipo'] }}</a>
            </div>

            @endforeach

        </div>
        @endforeach
        
    
@endsection
