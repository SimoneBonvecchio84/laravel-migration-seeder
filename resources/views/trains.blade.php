@extends('layouts.app')

@section('content')
<h1>Treni</h1>
@foreach ( $lista_treni as $treno )
    <img src="{{ $treno->immagine_treno }}" alt="{{ $treno->azienda }}">
    <h3>
        {{ $treno->azienda }}
    </h3>
@endforeach
@endsection