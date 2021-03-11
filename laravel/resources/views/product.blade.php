@extends('layouts.app')

@section('title', 'prodotti')

@section('content')
    
    <div class="linea-prodotti">
        @foreach ($formati as $item)
              <div class="box">
                  <img src="{{ $item['src'] }}" alt="">
                  <a href="{{ route('specifica-prodotto') }}" class="description">{{ $item['titolo'] }} - {{ $item['tipo'] }}</a>
              </div>
        @endforeach
    </div>
        
    
@endsection
