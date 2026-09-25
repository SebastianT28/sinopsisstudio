<?php

      require_once "config/conexion.php";

      $mysql = conexionMYSQL();

      $cliente = $_POST['cliente'];

      $sql = ("INSERT INTO clients(name) VALUES('$cliente')");

      if($resultado = $mysql->query($sql))

      {

        $respuesta = '<script> swal("¡Urra!", "Agregado con éxito.", "success");

                      </script>';

      }

      else

      {

        $respuesta = '<script> swal("¡Error!", "Error en la consulta. No se ejecuto la consulta.", "error");

                  </script>';

      }

      $mysql->close();

      print($respuesta);

?>
