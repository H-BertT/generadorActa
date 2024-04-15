<!DOCTYPE html>
<html>

<head>
        {{-- <link href="{{ asset('css/imprimir.css') }}" rel="stylesheet"> --}}
    <title>Acta Matrimonial</title>
</head>
<style>
    /* Estilos para el cuerpo del documento */
    body {
        position: relative;
    }

    /* Estilos para el texto */
    .texto {
        position: relative;
        z-index: 1;
    }

    /* Estilos para la imagen */
    img {
        position: absolute;
        bottom: 0;
        width: 100%;
        z-index: 0;
    }
</style>

<body>
    <div class="texto">
        @if ($acta->persona1->sexo == 'Masculino')
            <h3>Marido</h3>
            <p>Nombres: {{ $acta->persona1->nombres }}</p>
            <p>Primer Apellido: {{ $acta->persona1->primer_apellido }}</p>
            <p>Segundo Apellido: {{ $acta->persona1->segundo_apellido }}</p>
            <p>Entidad de Nacimiento: {{ $acta->persona1->entidad_nacimiento }}</p>
            <p>Municipio de Nacimiento: {{ $acta->persona1->municipio_nacimiento }}</p>
            <p>Nacionalidad: {{ $acta->persona1->nacionalidad }}</p>
            <p>Estado Civil: {{ $acta->persona1->estado_civil }}</p>
            <p>Sexo: {{ $acta->persona1->sexo }}</p>
            <p>Edad: {{ $acta->persona1->edad }}</p>
            <p>Padre: {{ $acta->persona1->padre }}</p>
            <p>Madre: {{ $acta->persona1->madre }}</p>
            <p>Nacionalidad del Padre: {{ $acta->persona1->nacionalidad_padre }}</p>
            <p>Nacionalidad de la Madre: {{ $acta->persona1->nacionalidad_madre }}</p>
            <h3>Mujer</h3>
            <p>Nombres: {{ $acta->persona2->nombres }}</p>
            <p>Primer Apellido: {{ $acta->persona2->primer_apellido }}</p>
            <p>Segundo Apellido: {{ $acta->persona2->segundo_apellido }}</p>
            <p>Entidad de Nacimiento: {{ $acta->persona2->entidad_nacimiento }}</p>
            <p>Municipio de Nacimiento: {{ $acta->persona2->municipio_nacimiento }}</p>
            <p>Nacionalidad: {{ $acta->persona2->nacionalidad }}</p>
            <p>Estado Civil: {{ $acta->persona2->estado_civil }}</p>
            <p>Sexo: {{ $acta->persona2->sexo }}</p>
            <p>Edad: {{ $acta->persona2->edad }}</p>
            <p>Padre: {{ $acta->persona2->padre }}</p>
            <p>Madre: {{ $acta->persona2->madre }}</p>
            <p>Nacionalidad del Padre: {{ $acta->persona2->nacionalidad_padre }}</p>
            <p>Nacionalidad de la Madre: {{ $acta->persona2->nacionalidad_madre }}</p>
        @else
            <h3>Marido</h3>
            <p>Nombres: {{ $acta->persona2->nombres }}</p>
            <p>Primer Apellido: {{ $acta->persona2->primer_apellido }}</p>
            <p>Segundo Apellido: {{ $acta->persona2->segundo_apellido }}</p>
            <p>Entidad de Nacimiento: {{ $acta->persona2->entidad_nacimiento }}</p>
            <p>Municipio de Nacimiento: {{ $acta->persona2->municipio_nacimiento }}</p>
            <p>Nacionalidad: {{ $acta->persona2->nacionalidad }}</p>
            <p>Estado Civil: {{ $acta->persona2->estado_civil }}</p>
            <p>Sexo: {{ $acta->persona2->sexo }}</p>
            <p>Edad: {{ $acta->persona2->edad }}</p>
            <p>Padre: {{ $acta->persona2->padre }}</p>
            <p>Madre: {{ $acta->persona2->madre }}</p>
            <p>Nacionalidad del Padre: {{ $acta->persona2->nacionalidad_padre }}</p>
            <p>Nacionalidad de la Madre: {{ $acta->persona2->nacionalidad_madre }}</p>
            <h3>Mujer</h3>
            <p>Nombres: {{ $acta->persona1->nombres }}</p>
            <p>Primer Apellido: {{ $acta->persona1->primer_apellido }}</p>
            <p>Segundo Apellido: {{ $acta->persona1->segundo_apellido }}</p>
            <p>Entidad de Nacimiento: {{ $acta->persona1->entidad_nacimiento }}</p>
            <p>Municipio de Nacimiento: {{ $acta->persona1->municipio_nacimiento }}</p>
            <p>Nacionalidad: {{ $acta->persona1->nacionalidad }}</p>
            <p>Estado Civil: {{ $acta->persona1->estado_civil }}</p>
            <p>Sexo: {{ $acta->persona1->sexo }}</p>
            <p>Edad: {{ $acta->persona1->edad }}</p>
            <p>Padre: {{ $acta->persona1->padre }}</p>
            <p>Madre: {{ $acta->persona1->madre }}</p>
            <p>Nacionalidad del Padre: {{ $acta->persona1->nacionalidad_padre }}</p>
            <p>Nacionalidad de la Madre: {{ $acta->persona1->nacionalidad_madre }}</p>
        @endif
    </div>

    <img src="https://cdn.discordapp.com/attachments/1093002286130806898/1228899712640483398/acta_sin_datos-transformed.jpeg?ex=662db90b&is=661b440b&hm=2519bd26f4a94bcc3e7aac39a317d7c898cca1b393c4c10aaeb9cd5af49424ff&"
        alt="Acta Matrimonial" style="width: 100%; height: auto;">

</body>

</html>
