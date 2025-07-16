<?php

require_once 'models/get.models.php';

class GetController {

    static function getData($table, $select){

        $respose = GetModel::getData($table, $select);
        $return = new GetController();
        $return -> fncResponce($respose);

        return $respose;

    }

/*=========================================================
RESPUESTA DEL CONTROLADOR
==========================================================*/

    public function fncResponce($respose){

        if(!empty($respose)){

            $json = array(

                'status' => 200,
                'total' => count($respose),
                'results' => $respose

            );
        }else{
            $json = array(

                'status' => 404,
                'results' => 'No hay resultados'

            );

        }

        echo json_encode($json, http_response_code($json["status"]));

    }
}