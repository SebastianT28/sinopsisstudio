<?php

    require_once "../config/conexion.php";

    include_once("config/controlador.php");   

      $mysql = conexionMYSQL();

      $valorRamdon = rand(1, 10000);

      $titulo = $_POST['title'];

      $intro = $_POST['description'];

      $contenido = $_POST['contenido'];

      $author = $_POST['author'];

      $tags = $_POST['tags'];



      $finalname = quitar_tildes($titulo);

      $alias = urls_amigables($finalname);



      $image      = $_FILES["image"]["name"];

      $imageB     = $valorRamdon.''.$image;

      $imgPath    = '../img/'. basename($imageB);

      $imgExtension = pathinfo($imgPath,PATHINFO_EXTENSION);



      //echo $imgPath.'----'.$contenido;

      

      $sql = ("INSERT INTO wg_blogs(title,description,content,author,file_type,image,created_date,tags,alias) VALUES('$titulo','$intro','$contenido','$author',0,'$imageB','2019-06-07 15:46:12','$tags','$alias')");



      echo $sql;

      



      // if(empty($imageB)) 

      //   {

      //       $isUploadSuccess = false;

      //   }

      //   else

      //   {

      //       $isUploadSuccess = true;

      //       if($imgExtension != "jpg" && $imgExtension != "png" && $imgExtension != "jpeg" && $imgExtension != "gif" && $imgExtension != "JPG" && $imgExtension != "PNG" && $imgExtension != "JPEG" && $imgExtension != "GIF") 

      //       {

      //          $respuesta = '<script> swal("¡Error!", "Los archivos permitidos son: .jpg, .jpeg, .png, .gif", "error");

      //             </script>';

      //           $isUploadSuccess = false;

      //       }

      //       if(file_exists($imgPath)) 

      //       {

      //           $isUploadSuccess = false;

      //          $respuesta = '<script> swal("¡Error!", "Una imagen con ese nombre ya existe.", "error");

      //             </script>';

      //       }

      //       if($_FILES["image"]["size"] > 50000000) 

      //       {



      //           $respuesta = '<script> swal("¡Error!", "El archivo no debe exceder el 5000000 KB", "error");

      //             </script>';

      //           $isUploadSuccess = false;

      //       }

      //       if($isUploadSuccess) 

      //       {

      //           if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imgPath)) 

      //           {

      //         $respuesta = '<script> swal("¡Error!", "Se ha producido un error al subir la imagen", "error");

      //             </script>';

      //               $isUploadSuccess = false;

      //           } 

      //       } 

      //   } 



      // if($isUploadSuccess = true)

      // {

      //      if($resultado = $mysql->query($sql))

      //       {



      //         $respuesta = '<script> swal("¡Urra!", "Agregado con éxito.", "success");

      //             </script>';



      //       }



      //       else

      //       {

      //         $respuesta = '<script> swal("¡Error!", "Error en la consulta. No se ejecuto la consulta.", "error");

      //             </script>';

      //       }

      // }

      // else{

      //     $respuesta = '<script> swal("¡Error!", "No se pudo agregar el registro, vuelva a intentarlo.", "error");

      //             </script>';

      // }

      

      $mysql->close();

      //printf($respuesta);





    

?>
