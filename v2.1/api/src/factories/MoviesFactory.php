<?php
// Ampliación 2
namespace App\factories;

use App\DAO\impl\MoviesStaticDAO;
use App\services\impl\MoviesService;

class MoviesFactory{

    static function getService(): MoviesService{
        return new MoviesService();
    }

    static function getDAO(): MoviesStaticDAO{
        return new MoviesStaticDAO();
    }
}