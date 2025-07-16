<?php
/*=======================================================================
AQUI CONFIGUTAMOS Y FILTRAMOS UN ARRAY PARA VER LA POSICION DE LA URL
========================================================================*/
$routerArray = explode('/', $_SERVER['REQUEST_URI']);
$routerArray = array_filter($routerArray);

/*======================================================
AQUI PREGUNTAMOS SU LA URL ESTA VACIA ENVIA UN ERROR
========================================================*/
if(count($routerArray) == 0){

    $json = array(

        'status' => 404,
        'result' => "No se ha encontrado la ruta"
    );

/*=====================================================
AQUI ENVIAMOS A LA CABECERA EL RESULTADO DEL ESTATUS
======================================================*/
    echo json_encode($json, http_response_code($json["status"]) );
    return;
}

/*=====================================================
CUANDO SI SE HACE UNA PETICION A LA API
======================================================*/

if(count($routerArray) == 1 && isset($_SERVER['REQUEST_METHOD']))

/*=====================================================
AQUI ENVIAMOS A LA PETICION GET
======================================================*/

if($_SERVER['REQUEST_METHOD'] == "GET"){

    include 'services/get.php';

}

/*=====================================================
AQUI ENVIAMOS A LA PETICION POST
======================================================*/

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $json = array(

        'status' => 200,
        'result' => "Solicitud POST"

    );

    echo json_encode($json, http_response_code($json["status"]));

}


/*=====================================================
AQUI ENVIAMOS A LA PETICION PUT
======================================================*/

if($_SERVER['REQUEST_METHOD'] == "PUT"){

    $json = array(

        'status' => 200,
        'result' => "Solicitud PUT"

    );

    echo json_encode($json, http_response_code($json["status"]));

}


/*=====================================================
AQUI ENVIAMOS A LA PETICION DELETE
======================================================*/

if($_SERVER['REQUEST_METHOD'] == "DELETE"){

    $json = array(

        'status' => 200,
        'result' => "Solicitud DELETE"

    );

    echo json_encode($json, http_response_code($json["status"]));

}