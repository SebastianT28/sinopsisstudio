<?php

    require 'vendor/autoload.php';

    

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



      $image      = $_FILES["fileUpload"]["name"];

      $extension = pathinfo($image,PATHINFO_EXTENSION);

      $imageB     = $valorRamdon.'.'.$extension;

      $keyName    = 'Noticias/'. basename($imageB);

      

        if(empty($imageB)) 

        {

            $isUploadSuccess = false;

        }

        else

        {

            $isUploadSuccess = true;

            if($_FILES["fileToUpload"]["size"] > 5000000000) 

            {

                echo 'tamaño de archivo muy grande';

                $isUploadSuccess = false;

            }

        } 

    if($isUploadSuccess = true)

    {

        //$keyName = 'Noticias/' . basename($_FILES["fileToUpload"]['name']);

        $pathInS3 = 'https://s3.us-west-2.amazonaws.com/' . $bucketName . '/' . $keyName;

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

        echo 'Subida <a href="'.$pathInS3.'" title="">Ver imagen</a>';

        echo '<img src="'.$pathInS3.'" alt="" width="50%">';

    }

    else{

        echo 'Error al subir imagen';

    }

    // Now that you have it working, I recommend adding some checks on the files.

    // Example: Max size, allowed file types, etc.

?>
