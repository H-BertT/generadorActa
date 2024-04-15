<!DOCTYPE html>
<html>

<head>
    {{-- <link href="{{ asset('css/imprimir.css') }}" rel="stylesheet"> --}}
    <title>Acta Matrimonial</title>
</head>
<style>
    body {
        position: relative;
    }

    .texto {
        font-size: 17px;
        position: relative;
        z-index: 1;
    }

    img {
    z-index: 0;
    position: absolute;
    top: -46px;
    left: -46px;
    min-width:800px;
    min-height:1130px;
}



    /* Mover los primeros tres párrafos a una posición específica */
    .texto p:nth-child(1) { /*nombres*/
        position: absolute;
        left: 163px;
        top: 275px;
    }

    .texto p:nth-child(2) {/*Primer apellido*/
        position: absolute;
        left: 357px;
        top: 275px;
    }

    .texto p:nth-child(3) {/*segundo apellido*/
        position: absolute;
        left: 535px;
        top: 275px;
    }
    /* ------------------------------------------------------------- */
    .texto p:nth-child(4) {/*entidad de nacimiento*/
        position: absolute;
        left: 113px;
        top: 318px;
    }
    
    .texto p:nth-child(5) {/*Municipio de nacimiento*/
        position: absolute;
        left: 287px;
        top: 318px;
    }
    
    .texto p:nth-child(6) {/*Nacionalidad*/
        position: absolute;
        left: 430px;
        top: 318px;
    }
    .texto p:nth-child(7) {/*sexo*/
        position: absolute;
        left: 545px;
        top: 318px;
    }
    
    .texto p:nth-child(8) {/*edad*/
        position: absolute;
        left: 636px;
        top: 318px;
    }
    /* ------------------------------------------------------------- */
    .texto p:nth-child(9) {/*padre*/
        position: absolute;
        left: 80px;
        top: 488px;
    }
    .texto p:nth-child(10) {/*nacionalidad_padre*/
        position: absolute;
        left: 537px;
        top: 488px;
    }
    .texto p:nth-child(11) {/*madre*/
        position: absolute;
        left: 80px;
        top: 516px;
    }
    .texto p:nth-child(12) {/*nacionalidad_padre*/
        position: absolute;
        left: 537px;
        top: 516px;
    }

    /* ------------------------------------------------------------- */
    .texto p:nth-child(13) { /*nombres*/
        position: absolute;
        left: 163px;
        top: 367px;
    }

    .texto p:nth-child(14) {/*Primer apellido*/
        position: absolute;
        left: 357px;
        top: 367px;
    }

    .texto p:nth-child(15) {/*segundo apellido*/
        position: absolute;
        left: 535px;
        top: 367px;
    }
        /* ------------------------------------------------------------- */
    .texto p:nth-child(16) {/*entidad de nacimiento*/
        position: absolute;
        left: 113px;
        top: 408px;
    }
    
    .texto p:nth-child(17) {/*Municipio de nacimiento*/
        position: absolute;
        left: 287px;
        top: 408px;
    }
    
    .texto p:nth-child(18) {/*Nacionalidad*/
        position: absolute;
        left: 430px;
        top: 408px;
    }
    .texto p:nth-child(19) {/*sexo*/
        position: absolute;
        left: 545px;
        top: 408px;
    }
    
    .texto p:nth-child(20) {/*edad*/
        position: absolute;
        left: 636px;
        top: 408px;
    }
    /* ------------------------------------------------------------- */
    .texto p:nth-child(21) {/*padre*/
        position: absolute;
        left: 80px;
        top: 542px;
    }
    .texto p:nth-child(22) {/*nacionalidad_padre*/
        position: absolute;
        left: 537px;
        top: 542px;
    }
    .texto p:nth-child(23) {/*madre*/
        position: absolute;
        left: 80px;
        top: 570px;
    }
    .texto p:nth-child(24) {/*nacionalidad_madre*/
        position: absolute;
        left: 537px;
        top: 570px;
    }
</style>

<body>
    <img src="https://cdn.discordapp.com/attachments/1093002286130806898/1228899712640483398/acta_sin_datos-transformed.jpeg?ex=662db90b&is=661b440b&hm=2519bd26f4a94bcc3e7aac39a317d7c898cca1b393c4c10aaeb9cd5af49424ff&"
    alt="Acta Matrimonial" style="width: 100%; height: auto;">
    <div class="texto">
        <p>{{ $acta->persona1->nombres }}</p>
        <p>{{ $acta->persona1->primer_apellido }}</p>
        <p>{{ $acta->persona1->segundo_apellido }}</p>

        <p>{{ $acta->persona1->entidad_nacimiento }}</p>
        <p>{{ $acta->persona1->municipio_nacimiento }}</p>
        <p>{{ $acta->persona1->nacionalidad }}</p>
        <p>{{ $acta->persona1->sexo }}</p>
        <p>{{ $acta->persona1->edad }}</p>
        
        <p>{{ $acta->persona1->padre }}</p>
        <p>{{ $acta->persona1->nacionalidad_padre }}</p>
        <p>{{ $acta->persona1->madre }}</p>
        <p>{{ $acta->persona1->nacionalidad_madre }}</p>

        {{-- Segunda persona empieza aquí ehhh --}}
        <p>{{ $acta->persona2->nombres }}</p>
        <p>{{ $acta->persona2->primer_apellido }}</p>
        <p>{{ $acta->persona2->segundo_apellido }}</p>
        
        <p>{{ $acta->persona2->entidad_nacimiento }}</p>
        <p>{{ $acta->persona2->municipio_nacimiento }}</p>
        <p>{{ $acta->persona2->nacionalidad }}</p>
        <p>{{ $acta->persona2->sexo }}</p>
        <p>{{ $acta->persona2->edad }}</p>
        
        <p>{{ $acta->persona2->padre }}</p>
        <p>{{ $acta->persona2->nacionalidad_padre }}</p>
        <p>{{ $acta->persona2->madre }}</p>
        <p>{{ $acta->persona2->nacionalidad_madre }}</p> 
    </div>



</body>

</html>
