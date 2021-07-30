@extends('template')

@section('titre')
    Infos
@stop

@section('contenu')
    {!! Form::open(['url' => 'users']) !!}
        {!! Form::label('nom', 'Entrez votre nom : ') !!}
        {!! Form::text('nom') !!}
        {!! Form::submit('Envoyez !') !!}
    {!! Form::close() !!}
@stop
