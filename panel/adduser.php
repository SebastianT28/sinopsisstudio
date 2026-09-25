<?php

      require_once "config/conexion.php";

      $mysql = conexionMYSQL();

      $nombre = $_POST['name'];

      $apellidos = $_POST['lastname'];

      $usuario = $_POST['username'];

      $contra = $_POST['password'];

      $searchUser = ("SELECT * FROM users WHERE username = '$usuario'");

      $sql = ("INSERT INTO users(username,password,name,last_name,type,status) VALUES('$usuario',md5('$contra'),'$nombre','$apellidos',1,1)");



      if ($resultado = $mysql->query($searchUser))

      {

        if(mysqli_num_rows($resultado) > 0)

        {



            while($fila = $resultado->fetch_assoc())

            {

                if ($fila['username'] == $usuario)

                {

                    $respuesta = '<script> swal("¡Ups!", "El nombre de usuario que deseas registrar, ya existe. Intenta con otro", "error");

                    </script>';

                }

            }

            $resultado->free();

        }

        else

        {

            $mysql->query($sql);

            $respuesta = '<script> swal("¡Urra!", "Agregado con éxito.", "success");

                      </script>';

        }

      }

      else

      {

        $respuesta = '<script> swal("¡Ups!", "No se pudo agregar al usuario. Intentar de nuevo", "error");

                    </script>';

      }



      $mysql->close();

      print($respuesta);

?>
