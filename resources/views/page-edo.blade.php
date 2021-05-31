@extends('layouts.app-edo')


@section('stylesheets')
@stop


@section('content_head')
INTESTAZIONE DELLA PAGINA
<collapse-on-scroll></collapse-on-scroll>
@endsection


@section('content_body')
CORPO DELLA PAGINA
<example-component></example-component>
@endsection


@section('scripts')
    EVENTUALI SCRIPT
    {{--NIENTE PER ORA--}}
@endsection
