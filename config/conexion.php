<?php 

require_once ("config.php");



function conexionMYSQL(){



    $conexion = new mysqli(SERVER,USER,PASS,BD);



    if ($conexion->connect_error) {



        $error = "Error de conexion a la base de datos";

        die($error);

    }



    else{

        //$alta = "Urra! Conexión existosa";

        //printf($alta);

    }



    $conexion->query("SET CHARACTER SET UTF8");



    return $conexion;



}

//conexionMYSQL();

 ?>
