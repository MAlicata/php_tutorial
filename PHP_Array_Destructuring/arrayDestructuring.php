<?php 
//PHP 7.1 

[
    'scheme' => $scheme,
    'host'   => $host,
    'path'   => $path
] = parse_url('https://www.phptutorial.net/');

var_dump($scheme, $host, $path);

//Ejemplo 2
list('scheme' => $scheme,
      'host' => $host,
      'path' => $path       
) = parse_url('https://www.phptutorial.net/');


var_dump($scheme, $host, $path);

//Ejemplo 3
$person = ['Matias', 'Alicata', 'PHP Developer'];
[$first_name, $last_name, $carrer] = $person;
var_dump($first_name, $last_name, $carrer);


//Ejemplo 4
$person_two = ['Matias', 'Alicata', 27];
[$first_name, , $age] = $person_two;

var_dump($first_name, $age);

