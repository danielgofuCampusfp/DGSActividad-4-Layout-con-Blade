@extends('layouts.landing')

@section('title', 'Services')

@section('content')
    <h1>Services</h1>

    <div class="container-cards">
        @component('landing._components.card')
            @slot('title', 'Servicio 1')
            @slot('content', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
        @endcomponent

        @component('landing._components.card')
            @slot('title', 'Servicio 2')
            @slot('content', 'Vivamus finibus odio nec nisl facilisis, ac tincidunt nisl tincidunt.')
        @endcomponent

        @component('landing._components.card')
            @slot('title', 'Servicio 3')
            @slot('content', 'Aliquam erat volutpat. Nulla facilisi. Integer nec odio.')
        @endcomponent
    </div>
@endsection