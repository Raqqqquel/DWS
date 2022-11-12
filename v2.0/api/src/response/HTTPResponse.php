<?php
// Ampliación 3 
namespace App\response;

class HTTPResponse{

    public static function json(int $code, $data){
        $response = array();
        switch (gettype($data)) {
            case 'array':
                foreach ($data as $dto){
                    $response[] = $dto->jsonSerialize();
            } break;
            case 'object':
                $response = $data->jsonSerialize();
                break;
            case 'string':
                $response = [
                    `Error`->$data
                ];
                break;

            default:
                $code;
        }

    }
}