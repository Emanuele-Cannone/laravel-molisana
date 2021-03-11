@extends('layouts.app')
@section('fontawesome')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    
@endsection
@section('content')
 
<div class="description-products">
    <h1>{{ $nomeAssociativo['titolo'] }}</h1>
    <img src="{{ $nomeAssociativo['src-h'] }}" alt="">
    <img src="{{ $nomeAssociativo['src-p'] }}" alt="">
    <div class="dettagli">
        <p>
            <i class="fas fa-info-circle"></i>
            {{ $nomeAssociativo['tipo'] }}
        </p>
        <p>
            <i class="far fa-clock"></i>
            {{ $nomeAssociativo['cottura'] }}
        </p>
        <p>
            <i class="fas fa-weight"></i>
            {{ $nomeAssociativo['peso'] }}
        </p>
    </div>
    <p>{!! $nomeAssociativo['descrizione'] !!}</p>
</div>

@endsection
