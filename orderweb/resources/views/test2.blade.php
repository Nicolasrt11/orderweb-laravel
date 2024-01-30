@extends('templates2.base')
@section('title','test2')
@section('content')
    <h1>test2</h1>
    <p>
        En la vida existen dos tipos de personas las que saben contar y las que no 
    </p>
<small>Homero simpson</small>
<br>
<button onclick="show_alert()">click</button>

    <script src="{{ asset('js/test.js') }}"> </script>
    
    @endsection
