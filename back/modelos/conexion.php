<?php

class Conexion{
    static public function conectar(){
        $link = new PDO(
            "mysql:host=localhost;dbname=mis_proyectos",
            "root",
            ""
        );
        $link->exec("set names utf8");
        return $link;
    }
}