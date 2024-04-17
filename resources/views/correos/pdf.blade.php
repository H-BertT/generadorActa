{{-- este es correos.pdf --}}
@extends('layout.plantilla')

@section('title', 'Invitación de Boda')

@section('content')

<style>
    .invitacion {
        position: relative;
        background-image: url('https://media.discordapp.net/attachments/1201532968250900580/1229815441870950501/Tarjeta_matrimonio_sobria_con_plantas.png?ex=66310de2&is=661e98e2&hm=cacfaedb6996d20c6b0991abc9b4844a146462acad66304080e9bb4bc6cec35d&=&format=webp&quality=lossless&width=475&height=669'); /* Reemplaza 'url_de_la_imagen.jpg' con la URL de tu imagen */
        background-size: cover;
        background-position: center;
        height: 500px; /* Ajusta la altura según sea necesario */
        text-align: center;
        padding-top: 100px; /* Ajusta el espaciado superior según sea necesario */
    }

    /* Estilos para cada párrafo */
    .invitacion p {
        position: absolute;
        font-size: 16px; /* Tamaño de fuente */
    }

    /* Estilos para el primer nombre */
    .nombre1 {
        top: 160px; /* Ajusta la posición vertical */
        left: 100px; /* Ajusta la posición horizontal */
    }

    /* Estilos para el segundo nombre */
    .nombre2 {
        top: 210px; /* Ajusta la posición vertical */
        left: 320px; /* Ajusta la posición horizontal */
    }

    /* Estilos para la fecha del matrimonio */
    .fecha {
        top: 450px; /* Ajusta la posición vertical */
        left: 40px; /* Ajusta la posición horizontal */
    }

    /* Estilos para la hora del matrimonio */
    .hora {
        top: 450px; /* Ajusta la posición vertical */
        left: 420px; /* Ajusta la posición horizontal */
    }

    /* Estilos para el lugar del matrimonio */
    .lugar {
        top: 450px; /* Ajusta la posición vertical */
        left: 220px; /* Ajusta la posición horizontal */
    }
</style>

<div class="invitacion">
    <p class="nombre1">{{ $data['persona1']['nombres'] }} {{ $data['persona1']['primer_apellido'] }} {{ $data['persona1']['segundo_apellido'] }}</p>
    <p class="nombre2">{{ $data['persona2']['nombres'] }} {{ $data['persona2']['primer_apellido'] }} {{ $data['persona2']['segundo_apellido'] }}</p>
    
    {{-- Mostrar la información de la boda --}}
    <p class="fecha">{{ $data['fecha'] }}</p>
    <p class="hora">{{ $data['hora'] }}</p>
    <p class="lugar">{{ $data['lugar'] }}</p>
</div>

@endsection
