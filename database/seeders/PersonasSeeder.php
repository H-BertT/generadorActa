<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Datos para los seeders
        $personas = [
            ['nombres' => 'Ana', 'primer_apellido' => 'García', 'segundo_apellido' => 'López', 'entidad_nacimiento' => 'Ciudad de México', 'municipio_nacimiento' => 'Benito Juárez', 'nacionalidad' => 'Mexicana', 'estado_civil' => 'Soltero', 'sexo' => 'Femenino', 'edad' => 25, 'padre' => 'Juan García', 'madre' => 'María López', 'nacionalidad_padre' => 'Mexicana', 'nacionalidad_madre' => 'Mexicana'],
            ['nombres' => 'Carlos', 'primer_apellido' => 'Hernández', 'segundo_apellido' => 'Sánchez', 'entidad_nacimiento' => 'Jalisco', 'municipio_nacimiento' => 'Guadalajara', 'nacionalidad' => 'Mexicana', 'estado_civil' => 'Soltero', 'sexo' => 'Masculino', 'edad' => 28, 'padre' => 'Pedro Hernández', 'madre' => 'Laura Sánchez', 'nacionalidad_padre' => 'Mexicana', 'nacionalidad_madre' => 'Mexicana'],
            ['nombres' => 'María', 'primer_apellido' => 'Pérez', 'segundo_apellido' => 'Martínez', 'entidad_nacimiento' => 'Puebla', 'municipio_nacimiento' => 'Puebla', 'nacionalidad' => 'Mexicana', 'estado_civil' => 'Soltero', 'sexo' => 'Femenino', 'edad' => 30, 'padre' => 'José Pérez', 'madre' => 'Carmen Martínez', 'nacionalidad_padre' => 'Mexicana', 'nacionalidad_madre' => 'Mexicana'],
            ['nombres' => 'Juan', 'primer_apellido' => 'Ramírez', 'segundo_apellido' => 'González', 'entidad_nacimiento' => 'Veracruz', 'municipio_nacimiento' => 'Xalapa', 'nacionalidad' => 'Mexicana', 'estado_civil' => 'Soltero', 'sexo' => 'Masculino', 'edad' => 22, 'padre' => 'Carlos Ramírez', 'madre' => 'Isabel González', 'nacionalidad_padre' => 'Mexicana', 'nacionalidad_madre' => 'Mexicana'],
            ['nombres' => 'Laura', 'primer_apellido' => 'Gómez', 'segundo_apellido' => 'Fernández', 'entidad_nacimiento' => 'Nuevo León', 'municipio_nacimiento' => 'Monterrey', 'nacionalidad' => 'Mexicana', 'estado_civil' => 'Soltero', 'sexo' => 'Femenino', 'edad' => 35, 'padre' => 'Roberto Gómez', 'madre' => 'Patricia Fernández', 'nacionalidad_padre' => 'Mexicana', 'nacionalidad_madre' => 'Mexicana'],
            ['nombres' => 'Miguel', 'primer_apellido' => 'Torres', 'segundo_apellido' => 'Ortiz', 'entidad_nacimiento' => 'Michoacán', 'municipio_nacimiento' => 'Morelia', 'nacionalidad' => 'Mexicana', 'estado_civil' => 'Soltero', 'sexo' => 'Masculino', 'edad' => 26, 'padre' => 'Luis Torres', 'madre' => 'Ana Ortiz', 'nacionalidad_padre' => 'Mexicana', 'nacionalidad_madre' => 'Mexicana'],
            ['nombres' => 'Sofía', 'primer_apellido' => 'Díaz', 'segundo_apellido' => 'Luna', 'entidad_nacimiento' => 'Querétaro', 'municipio_nacimiento' => 'Querétaro', 'nacionalidad' => 'Mexicana', 'estado_civil' => 'Soltero', 'sexo' => 'Femenino', 'edad' => 29, 'padre' => 'Jorge Díaz', 'madre' => 'Rosa Luna', 'nacionalidad_padre' => 'Mexicana', 'nacionalidad_madre' => 'Mexicana'],
            ['nombres' => 'Pedro', 'primer_apellido' => 'Vázquez', 'segundo_apellido' => 'Rojas', 'entidad_nacimiento' => 'Yucatán', 'municipio_nacimiento' => 'Mérida', 'nacionalidad' => 'Mexicana', 'estado_civil' => 'Soltero', 'sexo' => 'Masculino', 'edad' => 27, 'padre' => 'Ricardo Vázquez', 'madre' => 'Silvia Rojas', 'nacionalidad_padre' => 'Mexicana', 'nacionalidad_madre' => 'Mexicana'],
            ['nombres' => 'Fernanda', 'primer_apellido' => 'Álvarez', 'segundo_apellido' => 'Soto', 'entidad_nacimiento' => 'Sinaloa', 'municipio_nacimiento' => 'Culiacán', 'nacionalidad' => 'Mexicana', 'estado_civil' => 'Soltero', 'sexo' => 'Femenino', 'edad' => 31, 'padre' => 'Manuel Álvarez', 'madre' => 'Diana Soto', 'nacionalidad_padre' => 'Mexicana', 'nacionalidad_madre' => 'Mexicana'],
            ['nombres' => 'Javier', 'primer_apellido' => 'Núñez', 'segundo_apellido' => 'Herrera', 'entidad_nacimiento' => 'Sonora', 'municipio_nacimiento' => 'Hermosillo', 'nacionalidad' => 'Mexicana', 'estado_civil' => 'Soltero', 'sexo' => 'Masculino', 'edad' => 24, 'padre' => 'Alberto Núñez', 'madre' => 'Margarita Herrera', 'nacionalidad_padre' => 'Mexicana', 'nacionalidad_madre' => 'Mexicana'],
        ];

        // Insertar datos en la base de datos
        foreach ($personas as $persona) {
            Persona::create($persona);
        }
    }
}
