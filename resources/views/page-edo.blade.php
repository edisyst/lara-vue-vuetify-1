@extends('layouts.app-edo')


@section('stylesheets')
@stop


@section('content_head')
    INTESTAZIONE DELLA PAGINA
    <a class="navbar-brand" href="/">Torna alla home</a>
    <collapse-on-scroll></collapse-on-scroll>
@endsection


@section('content_body')
    <p>Pagina che estende il layout <b>layouts.app-edo</b> all'interno del quale ho la app.vue</p>
    <p>Nel layout il div#app occupa tutto il body, ed è suddiviso in sezioni che estendo nella pagina</p>
    <p>Richiamando nella pagina le sezioni, ci metto dentro i components</p>
    <p>In questo caso ne ho uno nell'intestazione e uno nel main</p>
@endsection


@section('content_footer')
    <example-component></example-component>
@endsection


@section('scripts')
    EVENTUALI SCRIPT
    {{--NIENTE PER ORA--}}
@endsection
