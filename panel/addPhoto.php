<?php
require_once "../config/conexion.php";
include_once "config/controlador.php";
echo '<script>
        $("#loadimg2").show();
      </script>';
$mysql = conexionMYSQL();
$valorRamdon = rand(1, 10000);
$project_id = $_POST['project_id'];

// CREAR CARPETA PARA IMAGENES
$years = date("Y");
$month = date("m");
$carpeta = '../uploads/img_projects/' . $years . '/' . $month . '';
if (verifyDirProjects($years, $month) == 'No') {
	mkdir($carpeta, 0777, true);
	$rutaimg = '../uploads/img_projects/' . $years . '/' . $month . '';
} else {
	$rutaimg = '../uploads/img_projects/' . $years . '/' . $month . '';
}

$image = $_FILES["image"]["name"];
$imageB = $years . '/' . $month . '/' . $valorRamdon . '' . str_replace(' ', '', $image);
$imgPath = $rutaimg . '/' . basename($imageB);
$imgExtension = pathinfo($imgPath, PATHINFO_EXTENSION);

//echo $imgPath.'----'.$contenido;

$sql = ("INSERT INTO ws_gallery_portfolio(id_portfolio,image) VALUES($project_id,'$imageB')");

if (empty($imageB)) {
	$isUploadSuccess = false;
} else {
	$isUploadSuccess = true;
	if ($imgExtension != "jpg" && $imgExtension != "webp" && $imgExtension != "png" && $imgExtension != "jpeg" && $imgExtension != "JPG" && $imgExtension != "PNG" && $imgExtension != "WEBP" && $imgExtension != "JPEG") {
		$respuesta = '<script> swal("¡Error!", "Los archivos permitidos son: .jpg, .jpeg", "error");
                  </script>';
		$isUploadSuccess = false;
	}
	if (file_exists($imgPath)) {
		$isUploadSuccess = false;
		$respuesta = '<script> swal("¡Error!", "Una imagen con ese nombre ya existe.", "error");
                  </script>';
	}
	if ($_FILES["image"]["size"] > 50000000) {

		$respuesta = '<script> swal("¡Error!", "El archivo no debe exceder los 5000000 KB", "error");
                  </script>';
		$isUploadSuccess = false;
	}
	if ($isUploadSuccess) {
		if (!move_uploaded_file($_FILES["image"]["tmp_name"], $imgPath)) {
			$respuesta = '<script> swal("¡Error!", "Se ha producido un error al subir la imagen", "error");
                  </script>';
			$isUploadSuccess = false;
		}
	}
}

if ($isUploadSuccess = true) {
	if ($resultado = $mysql->query($sql)) {

		$respuesta = '
              <script>
              swal("¡Hurra!", "Agregado con éxito.", "success");
             var pagina="projects"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                  </script>';

	} else {
		echo $sql;
		$respuesta = '<script> swal("¡Error!", "Error en la consulta. No se ejecuto la consulta.", "error");
              // var pagina="projects"
              //   function redireccionar()
              //   {
              //   location.href=pagina
              //   }
              //   setTimeout ("redireccionar()", 2000);
                  </script>';
	}
} else {
	$respuesta = '<script> swal("¡Error!", "No se pudo agregar el registro, vuelva a intentarlo. Sin imagen", "error");
          // var pagina="projects"
          //       function redireccionar()
          //       {
          //       location.href=pagina
          //       }
          //       setTimeout ("redireccionar()", 2000);
                  </script>';
}

$mysql->close();

print($respuesta);

?>