<?php

class connection{
    static public function infoDatabase(){
/*=================================================
Informacion de la Base de Datos
==================================================*/
        
        $infoDB = array(

            "database" => "database-1",
            "user" => "root",
            "pass" => ""

        );

        return $infoDB;
    }

    /*=================================================
    Conexion a la Base de Datos
    =================================================*/

    static public function connect(){

        try{
            $link = new PDO("mysql:host=localhost;dbname=".connection::infoDatabase()["database"],connection::infoDatabase()["user"],connection::infoDatabase()["pass"]);
            
            $link->exec("set names utf8");

        }catch(PDOException $e){

            die("Error de conexión: " . $e->getMessage());

        }

        return $link;

    }
}