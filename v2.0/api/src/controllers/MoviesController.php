<?php
    namespace App\controllers;

    use App\services\impl\MoviesService;
    use App\services\IMoviesService;

    class MoviesController{

        private IMoviesService $service;

        public function __construct()
        {
            $this->service = new MoviesService();
        }
        
        public function all(){
            echo "Listado de todas las películas";
            //header('Content-Type: application/json');
            //echo json_encode($this->service->all());
        }

        public function find($id){
            echo "Detalle de la película con id $id: ";

            echo json_encode($this->service->find($id) ?? 'No se ha encontrado la pagina.');
            /*try {
             *    echo json_encode($this->service->find($id));
             * } catch (\Throwable $th){
                echo json_decode($th->getMessage());
            }*/
        }

    }