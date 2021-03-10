@extends('layouts.app')

@section('content')
    
    <div class="linea-prodotti">
        @foreach ($formati as $item)
              <div class="box">
                  <img src="{{ $item['src'] }}" alt="">
                  <p class="description">{{ $item['titolo'] }} - {{ $item['tipo'] }}</p>
              </div>
        @endforeach
    </div>
        
    
@endsection
