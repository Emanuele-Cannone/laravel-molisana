@extends('layouts.app')

@section('title', 'prodotti')

@section('content')
    
    <div class="linea-prodotti">
        @foreach ($formati as $index => $item)
              <div class="box">
                  <img src="{{ $item['src'] }}" alt="">
                  <a href="{{ route('specifica-prodotto', ['id' => $index]) }}" class="description">{{ $item['titolo'] }} - {{ $item['tipo'] }}</a>
              </div>
        @endforeach
    </div>
        
    
@endsection
