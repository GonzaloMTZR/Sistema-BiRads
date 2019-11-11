@extends('layouts.master')
@section('title', 'Detalle de una jurisdicción')

@section('main-content')
    <div class="breadcrumb">
        <h1>Jurisdicciones</h1>
        <ul>
            <li><a href="/jurisdicciones">Jurisdicciones</a></li>
            <li>Detalle de la jurisdicción de: {{$jurisdiccion->jurisdiccion}}</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-4">
        <div class="col-md-12">
            <h4>Jurisdicción de {{$jurisdiccion->jurisdiccion}}</h4>
        </div>
    </div>


    
@endsection

