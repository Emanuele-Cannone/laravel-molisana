@extends('layouts.app')

@section('content')
    
    <div class="box">
        @foreach ($formati as $item)
              <div class="box">
                  <img src="{{ $item['src'] }}" alt="">
              </div>
        @endforeach
    </div>
        
    
@endsection
