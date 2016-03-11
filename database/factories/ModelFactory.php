<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Estado::class, function (Faker\Generator $faker) {
    return [
        'estado' => $faker->name,
      ];
});

$factory->define(App\Municipio::class, function (Faker\Generator $faker) {
    return [
        'municipio' => $faker->name,
        'estado_id' => 2,
      ];
});

$factory->define(App\Parroquia::class, function (Faker\Generator $faker) {
    return [
        'parroquia' => $faker->name,
        'municipio_id' => 1,
      ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        
        'apellido1' => $faker->lastName,
        'apellido2' => $faker->lastName,
        'nombre1'   => $faker->firstName,
        'nombre2'   => $faker->firstName,
        'cedula'   => $faker->numberBetween(1,30000000),
        'fe_nac' => $faker->date,
        'lugar_nacimiento'   => $faker->city,
        'religion'   => 'CATOLICO',
        'direccion'   => $faker->address,
        'telefono_hab'   => $faker->phoneNumber,
        'telefono_cel'   => $faker->phoneNumber,
        'direccion'   => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'estado_id' => 1,
        'municipio_id' => 1,
        'parroquia_id' => 1,
 
    ];
});

$factory->define(App\Nomina::class, function (Faker\Generator $faker) {
    return [
        
        'nomina' => $faker->name,
    ];
});

$factory->define(App\Filial::class, function (Faker\Generator $faker) {
    return [
        
        'filial' => $faker->name, 
    ];
});


$factory->define(App\Trabajador::class, function (Faker\Generator $faker) {
    return [
        
        'profesion' => $faker->company,
        'lugar_trabajo' => $faker->company,
        'departamento'   => $faker->company,
        'telefono_trabajo'   => $faker->phoneNumber,
        'nomina_id' => $faker->numberBetween(1,4),
        'filial_id' => $faker->numberBetween(1,4),
        'id' => 1,
 
    ];
});

 
 $factory->define(App\Docente::class, function (Faker\Generator $faker) {
    return [
        
        'id' => 1,
      
 
    ];
});
 
 
$factory->define(App\Materia::class, function (Faker\Generator $faker) {
    return [
        
        'materia' => $faker->name,
      
 
    ];
});      
 
$factory->define(App\Responsable::class, function (Faker\Generator $faker) {
    return [
        'id'  => 1,
        'vive_con_estudiante' => 'S',
        'es_representante' => 'S',
    ];
});        

$factory->define(App\Talla::class, function (Faker\Generator $faker) {
    return [
        'talla'  => $faker->name,
        
    ];
});  
$factory->define(App\Institucion::class, function (Faker\Generator $faker) {
    return [
        'institucion'  => $faker->name,
        
    ];
}); 

$factory->define(App\Ruta::class, function (Faker\Generator $faker) {
    return [
        'ruta'  => $faker->name,
        'institucion_id' => 1,
        
    ];
});  

$factory->define(App\Alumno::class, function (Faker\Generator $faker) {
    return [
        'id'  => $faker->numberBetween(1,2),
        'ruta_id' => 1,
        'representante_id' => 1,
        'padre_id' => 1,
        'madre_id' => 1,
        'talla_id' => 1,
    ];
});        


