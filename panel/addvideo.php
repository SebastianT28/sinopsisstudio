<?php

    require_once "config/conexion.php";

    require 'vendor/autoload.php';



    function generateRandomString($length = 35) {

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $charactersLength = strlen($characters);

    $randomString = '';

    for ($i = 0; $i < $length; $i++) {

        $randomString .= $characters[rand(0, $charactersLength - 1)];

    }

    return $randomString;

    }



    use Aws\S3\S3Client;

    use Aws\S3\Exception\S3Exception;

    $bucketName = 'gomademascar-noticias';

    $IAM_KEY = 'TU_AWS_ACCESS_KEY';

    $IAM_SECRET = 'TU_AWS_SECRET_KEY';

    try {

        $s3 = S3Client::factory(

            array(

                'credentials' => array(

                    'key' => $IAM_KEY,

                    'secret' => $IAM_SECRET

                ),

                'version' => 'latest',

                'region'  => 'us-west-2'

            )

        );

    } catch (Exception $e) {

        die("Error: " . $e->getMessage());

    }



      $valorRamdon = generateRandomString();   

      $mysql = conexionMYSQL();

      $titulo = $_POST['title'];

      $medio = $_POST['medio'];

      $fecha = $_POST['date'];

      //$fecha->format('Y-m-d');

      $descripcion = $_POST['description'];

      $seccion = $_POST['section'];

      $hour = $_POST['hour'];



      $fechafinal = $fecha.' '.$hour;

      $userId = $_POST['iduser'];

      $cliente = $_POST['client3'];



      $image      = $_FILES["fileUpload"]["name"];

      $extension = pathinfo($image,PATHINFO_EXTENSION);

      $imageB     = $valorRamdon.'.'.$extension;

      $keyName    = 'Noticias/'. basename($imageB);

      $pathInS3 = 'https://s3.us-west-2.amazonaws.com/' . $bucketName . '/' . $keyName;

      $sql = ("INSERT INTO news(type,media,headline,datenew,description,section,page,file,user_id) VALUES(2,'$medio','$titulo','$fechafinal','$descripcion','$seccion','0','$pathInS3',$userId)");

    



      if(empty($imageB)) 

      {

            $isUploadSuccess = false;

      }

      else

      {

        $isUploadSuccess = true;

        if($_FILES["fileUpload"]["size"] > 5000000000) 

        {

          $respuesta = '<script> swal("¡Error!", "El archivo no debe exceder el 500000000 KB", "error");

                  </script>';

          $isUploadSuccess = false;

        }

      }



      if($isUploadSuccess = true)

      {

          //$keyName = 'Noticias/' . basename($_FILES["fileToUpload"]['name']);

          

          // Add it to S3

          try {

              // Uploaded:

              $file = $_FILES["fileUpload"]['tmp_name'];

              $s3->putObject(

                  array(

                      'Bucket'=>$bucketName,

                      'Key' =>  $keyName,

                      'SourceFile' => $file,

                      'ACL'    => 'public-read',

                      'StorageClass' => 'STANDARD'

                  )

              );

          } catch (S3Exception $e) {

              die('Error:' . $e->getMessage());

          } catch (Exception $e) {

              die('Error:' . $e->getMessage());

          }

          if($resultado = $mysql->query($sql))

            {



                // FUNCION PARA OBTENER EL ULTIMO ID DE NOTICIAS

                  $sql2 = ("SELECT MAX(id) AS idmaximo FROM news");

                  if($result = $mysql->query($sql2))

                  {

                    while($filanews = $result->fetch_assoc())

                    {

                        $idLastNew = $filanews['idmaximo'];

                    }

                    $result->free();

                  }

                  $newIdNews = $idLastNew;

                   // FUNCION SQL PARA AGREGAR EN CLIENTS_NEWS

                  $sql3 = ("INSERT INTO clients_news (news_id,client_id) VALUES($newIdNews,$cliente)");

                  $mysql->query($sql3);

                  $respuesta = '<script> swal("¡Urra!", "Agregado con éxito.", "success");

                      </script>';



            }



            else

            {

              $respuesta = '<script> swal("¡Error!", "Error en la consulta. No se ejecuto la consulta.", "error");

                  </script>';

            }

      }

      else{

          $respuesta = '<script> swal("¡Error!", "No se pudo agregar el registro, vuelva a intentarlo.", "error");

                  </script>';

      }

      

      $mysql->close();

      printf($respuesta);





    

?>
