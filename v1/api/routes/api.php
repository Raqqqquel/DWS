<?php 

$router = new \Bramus\Router\Router();
 
 
$router->setNamespace('\App');
 
/**
 * Definimos nuestras rutas
 */
$router->get('/', function() { echo "Bienvenido a la API de películas"; });
$router->get('/peliculas', function() { echo "Listado de todas las películas"; });

/**
 * Ampliación 1
 */
$router->get('/peliculas/(\d+)', function($id) { echo "Detalle de la película con ID $id"; });


/*
 * Ampliación 2
 */
$router->set404(function() { echo ('No se encontró la página'); });

 
$router->run();