<?php
date_default_timezone_set("America/Lima");
require_once "../config/conexion.php";

function verifyDir($year, $monthy) {
	$carpeta = '../uploads/img_articles/' . $year . '/' . $monthy . '';
	if (!file_exists($carpeta)) {
		$respuesta = 'No';
	} else {
		$respuesta = 'Si';
	}
	return $respuesta;
}

function verifyDirProjects($year, $monthy) {
	$carpeta = '../uploads/img_projects/' . $year . '/' . $monthy . '';
	if (!file_exists($carpeta)) {
		$respuesta = 'No';
	} else {
		$respuesta = 'Si';
	}
	return $respuesta;
}

function getRealIP() {

	if (isset($_SERVER["HTTP_CLIENT_IP"])) {
		return $_SERVER["HTTP_CLIENT_IP"];
	} elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
		return $_SERVER["HTTP_X_FORWARDED_FOR"];
	} elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {
		return $_SERVER["HTTP_X_FORWARDED"];
	} elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
		return $_SERVER["HTTP_FORWARDED_FOR"];
	} elseif (isset($_SERVER["HTTP_FORWARDED"])) {
		return $_SERVER["HTTP_FORWARDED"];
	} else {
		return $_SERVER["REMOTE_ADDR"];
	}

}

function urls_amigables($url) {

	// Tranformamos todo a minusculas

	$url = strtolower($url);

	//Rememplazamos caracteres especiales latinos

	$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');

	$repl = array('a', 'e', 'i', 'o', 'u', 'n');

	$url = str_replace($find, $repl, $url);

	// Añadimos los guiones

	$find = array(' ', '&', '\r\n', '\n', '+');
	$url = str_replace($find, '-', $url);

	// Eliminamos y Reemplazamos otros carácteres especiales

	$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');

	$repl = array('', '-', '');

	$url = preg_replace($find, $repl, $url);

	return $url;

}

function quitar_tildes($cadena) {
	$no_permitidas = array("á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "ñ", "À", "Ã", "Ì", "Ò", "Ù", "Ã™", "Ã ", "Ã¨", "Ã¬", "Ã²", "Ã¹", "ç", "Ç", "Ã¢", "ê", "Ã®", "Ã´", "Ã»", "Ã‚", "ÃŠ", "ÃŽ", "Ã”", "Ã›", "ü", "Ã¶", "Ã–", "Ã¯", "Ã¤", "«", "Ò", "Ã", "Ã„", "Ã‹");
	$permitidas = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", "n", "N", "A", "E", "I", "O", "U", "a", "e", "i", "o", "u", "c", "C", "a", "e", "i", "o", "u", "A", "E", "I", "O", "U", "u", "o", "O", "i", "a", "e", "U", "I", "A", "E");
	$texto = str_replace($no_permitidas, $permitidas, $cadena);
	return $texto;
}

function loginUsuario($user, $password) {
	$sql = "SELECT * FROM ws_usuarios WHERE usuario = '$user'";
	$mysql = conexionMYSQL();
	if ($resultado = $mysql->query($sql)) {
		if (mysqli_num_rows($resultado) == 0) {
			//$respuesta = '<div class="error">Error: los datos ingresados no existen en nuestra base de datos. Consulte con un administrador.</div>';
			$respuesta = '<script>
          swal("¡Error!", "Los datos ingresados no existen. Por favor revisa la información ingresada.", "error");
            // var pagina="login";
            //       function redireccionar()
            //       {
            //       location.href=pagina
            //       }
            //       setTimeout ("redireccionar()", 1500);
          </script>';
		} else {
			$fila = $resultado->fetch_assoc();
			if ($user == $fila['usuario'] && password_verify($password, $fila['password'])) {
				//DECLARO VARIABLES SESSION PARA EL BACKOFFICE
				$_SESSION['spAD'] = array();
				$_SESSION['spAD']['idadmin'] = openssl_encrypt($fila['id'], COD, KEY);
				$_SESSION['spAD']['usuario'] = openssl_encrypt($fila['usuario'], COD, KEY);
				$_SESSION['spAD']['rango'] = openssl_encrypt($fila['rango'], COD, KEY);
				$respuesta = '<script>
                              swal("¡Hurra!", "Datos correctos", "success");
                              var pagina="/panel";
                              function redireccionar()
                              {
                              location.href=pagina
                              }
                              setTimeout ("redireccionar()", 1500);
                              </script>';

			} else {
				$respuesta = '<script>
                swal("¡Error!", "Contraseña incorrecta", "error");
                // var pagina="login";
                // function redireccionar()
                // {
                // location.href=pagina
                // }
                // setTimeout ("redireccionar()", 1500);
                    </script>';
				//$respuesta = '<div class="error">Contraseña incorrecta!</div>';
			}
			$resultado->free();
		}

	} else {
		$respuesta = '<script> swal("¡Error!", "No se pudo conectar a la base de datos", "error");
                    </script>';
	}
	$mysql->close();
	return print($respuesta);
}

function sacarNombreUsuario() {
	$nomUser = Array();

	$mysql = conexionMYSQL();
	$sql = "SELECT * FROM ws_usuarios";

	if ($resultado = $mysql->query($sql)) {
		while ($fila = $resultado->fetch_assoc()) {
			$nomUser[$fila['id']] = $fila['nombre'];
		}
		$resultado->free();
	}
	$mysql->close();

	//MUESTRA ARRAY print_r($tipoServicios);
	return ($nomUser);
}

function insertUsuario() {
	$nombre = $_POST['name'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
	$usuario = $_POST['user'];
	$password = $_POST['password'];

	$pass = password_hash($password, PASSWORD_DEFAULT);

	$sql = ("SELECT * FROM ws_usuarios WHERE email = '$email' OR usuario = '$usuario'");
	$insertUsuario = "INSERT INTO ws_usuarios (nombre,apellidos,usuario,password,email,rango,estado) VALUES('$nombre','$apellidos','$usuario','$pass','$email',1,1)";
	$mysql = conexionMYSQL();

	if ($resultado = $mysql->query($sql)) {
		if (mysqli_num_rows($resultado) > 0) {

			while ($fila = $resultado->fetch_assoc()) {
				if ($fila['email'] == $email && $fila['usuario'] == $usuario) {
					$respuesta = '<script> swal("¡Error!", "Email y Usuario ingresados ya existen en nuestra base de datos.", "error");
                    </script>';
				} else if ($fila['email'] == $email) {
					$respuesta = '<script> swal("¡Error!", "El email ingresado ya existe en nuestra base de datos.", "error");
                    </script>';
				} else {
					$respuesta = '<script> swal("¡Error!", "El usuario ingresado ya existe en nuestra base de datos.", "error");
                    </script>';
				}
			}
			$resultado->free();
		} else {
			$mysql->query($insertUsuario);
			$respuesta = '<script> swal("¡Hurra!", "Agregado con éxito.", "success");
            var pagina="users"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                    </script>';
		}
	} else {
		$respuesta = '<script> swal("¡Error!", "No se pudo agregar al usuario. Intentar de nuevo", "error");
            var pagina="users"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                    </script>';
	}

	$mysql->close();
	return printf($respuesta);

}

function editUser() {

	$idUser = $_POST['iduser'];
	$mysql = conexionMYSQL();
	if (!empty($_POST['password'])) {
		$password = $_POST['password'];
		$pass = password_hash($password, PASSWORD_DEFAULT);
		$edit2 = "UPDATE wg_users SET password=('$pass') WHERE id=$idUser";
		$mysql->query($edit2);
		$respuesta = '<script> swal("¡Urra!", "Datos actualizados correctamente", "success");
            var pagina="users"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                    </script>';
	} else {
		$respuesta = '<script> swal("¡Urra!", "Datos actualizados correctamente", "success");
                    </script>';
	}
	$mysql->close();

	return printf($respuesta);

}

function newPasswordUser() {
	$mysql = conexionMYSQL();
	$nomuser = $_POST['usuario'];
	$new = $_POST['newpassword'];
	$sql = ("UPDATE users SET password=md5('$new') WHERE username = '$nomuser'");
	$sql2 = ("SELECT * FROM users WHERE username = '$nomuser'");
	$consult = $mysql->query($sql2);
	if (mysqli_num_rows($consult) > 0) {
		if ($mysql->query($sql)) {
			$respuesta = '<script> swal("¡Felicitaciones!", "Su contraseña fue actualizada con éxito.", "success");
                    var pagina="login"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                    </script>';
		} else {
			$respuesta = '<script> swal("¡Ups!", "Lo sentimos no pudimos actualizar tu contraseña. Verifica tu usuario.", "error");

                    </script>';
		}
	} else {
		$respuesta = '<script> swal("¡Ups!", "Lo sentimos, no encontramos ese nombre de usuario.", "error");

                    </script>';
	}

	$mysql->close();

	return printf($respuesta);
}

// SERVICIOS

function newService() {
	$mysql = conexionMYSQL();
	$nombre = $_POST['name'];

	$finalname = quitar_tildes($nombre);
	$alias = urls_amigables($finalname);

	$sql = ("INSERT INTO ws_servicios(nombre,alias) VALUES('$nombre','$alias')");

	if ($resultado = $mysql->query($sql)) {

		$respuesta = '
              <script>
              swal("¡Hurra!", "Agregado con éxito.", "success");
             var pagina="servicios"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                  </script>';

	} else {
		$respuesta = '<script> swal("¡Error!", "Error en la consulta. No se ejecuto la consulta.", "error");
              var pagina="servicios"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                  </script>';
	}

	$mysql->close();

	return print($respuesta);
}

// END SERVICIOS

function newArticle() {
	echo '<script>
        $("#loadimg").show();
      </script>';
	$mysql = conexionMYSQL();
	$valorRamdon = rand(1, 10000);
	$titulo = $_POST['title'];
	$contenido = $_POST['contenido'];
	$author = $_POST['author'];
	$tags = $_POST['tags'];
	$date_now = date("Y-m-d H:i:s");

	$finalname = quitar_tildes($titulo);
	$alias = urls_amigables($finalname);

	// CREAR CARPETA PARA IMAGENES
	$years = date("Y");
	$month = date("m");
	$carpeta = '../uploads/img_articles/' . $years . '/' . $month . '';
	if (verifyDir($years, $month) == 'No') {
		mkdir($carpeta, 0777, true);
		$rutaimg = '../uploads/img_articles/' . $years . '/' . $month . '';
	} else {
		$rutaimg = '../uploads/img_articles/' . $years . '/' . $month . '';
	}

	$image = $_FILES["image"]["name"];
	$imageB = $years . '/' . $month . '/' . $valorRamdon . str_replace(' ', '', $image);
	$imgPath = $rutaimg . '/' . basename($imageB);
	$imgExtension = pathinfo($imgPath, PATHINFO_EXTENSION);

	//echo $imgPath.'----'.$contenido;

	$sql = ("INSERT INTO ws_blogs(title,content,author,file_type,image,created_date,tags,alias) VALUES('$titulo','$contenido','$author',0,'$imageB','$date_now','$tags','$alias')");

	if (empty($imageB)) {
		$isUploadSuccess = false;
	} else {
		$isUploadSuccess = true;
		if ($imgExtension != "jpg" && $imgExtension != "webp" && $imgExtension != "png" && $imgExtension != "jpeg" && $imgExtension != "gif" && $imgExtension != "JPG" && $imgExtension != "PNG" && $imgExtension != "JPEG" && $imgExtension != "WEBP" && $imgExtension != "GIF") {
			$respuesta = '<script> swal("¡Error!", "Los archivos permitidos son: .jpg, .jpeg, .png, .gif", "error");
                  </script>';
			$isUploadSuccess = false;
		}
		if (file_exists($imgPath)) {
			$isUploadSuccess = false;
			$respuesta = '<script> swal("¡Error!", "Una imagen con ese nombre ya existe.", "error");
                  </script>';
		}
		if ($_FILES["image"]["size"] > 50000000) {

			$respuesta = '<script> swal("¡Error!", "El archivo no debe exceder el 5000000 KB", "error");
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
             var pagina="blogs"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                  </script>';

		} else {
			$respuesta = '<script> swal("¡Error!", "Error en la consulta. No se ejecuto la consulta.", "error");
              var pagina="blogs"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                  </script>';
		}
	} else {
		$respuesta = '<script> swal("¡Error!", "No se pudo agregar el registro, vuelva a intentarlo.", "error");
          var pagina="blogs"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                  </script>';
	}

	$mysql->close();

	return print($respuesta);
}

function updateArticle() {
	$valorRamdon = rand(1, 10000);
	$mysql = conexionMYSQL();
	$id = $_POST['id'];
	$title = $_POST['title'];
	$autor = $_POST['autor'];
	$tags = $_POST['tags'];
	$contenido = $_POST['content'];

	$finalname = quitar_tildes($title);
	$alias = urls_amigables($finalname);
	$sql = ("UPDATE ws_blogs SET title = '$title', content = '$contenido', author = '$autor', tags = '$tags', alias = '$alias' WHERE id = $id");

	$imagenActual = $_POST['imgactual'];
	$rimg = "../uploads/img_articles/" . $imagenActual;

	$years = date("Y");
	$month = date("m");
	$carpeta = '../uploads/img_articles/' . $years . '/' . $month . '';
	if (verifyDir($years, $month) == 'No') {
		mkdir($carpeta, 0777, true);
		$rutaimg = '../uploads/img_articles/' . $years . '/' . $month . '';
	} else {
		$rutaimg = '../uploads/img_articles/' . $years . '/' . $month . '';
	}

	$image = $_FILES["image"]["name"];
	$imageB = $years . '/' . $month . '/' . $valorRamdon . str_replace(' ', '', $image);
	$imgPath = $rutaimg . '/' . basename($imageB);
	$imgExtension = pathinfo($imgPath, PATHINFO_EXTENSION);
	$sql2 = ("UPDATE ws_blogs SET title = '$title', content = '$contenido', author = '$autor', image = '$imageB', tags = '$tags', alias = '$alias' WHERE id = $id");

	if (empty($imageB)) {
		$isUploadSuccess = false;
	} else {
		$isUploadSuccess = true;
		if ($imgExtension != "jpg" && $imgExtension != "webp" && $imgExtension != "png" && $imgExtension != "jpeg" && $imgExtension != "gif" && $imgExtension != "JPG" && $imgExtension != "WEBP" && $imgExtension != "PNG" && $imgExtension != "JPEG" && $imgExtension != "GIF") {
			$respuesta = '<script> swal("¡Error!", "Los archivos permitidos son: .jpg, .jpeg, .png, .gif", "error");
                  </script>';
			$isUploadSuccess = false;
		}
		if (file_exists($imgPath)) {
			$isUploadSuccess = false;
			$respuesta = '<script> swal("¡Error!", "Una imagen con ese nombre ya existe.", "error");
                  </script>';
		}
		if ($_FILES["image"]["size"] > 50000000) {

			$respuesta = '<script> swal("¡Error!", "El archivo no debe exceder el 500000 KB", "error");
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

	if ($isUploadSuccess) {

		if ($resultado = $mysql->query($sql2)) {
			if (file_exists($rimg)) {
				unlink($rimg);
			}
			$respuesta = '<script> swal("¡Hurra!", "Artículo e Imagen actualizados con éxito.", "success");
                           var pagina="blogs"
                       function redireccionar()
                       {
                       location.href=pagina;
                       }
                       setTimeout("redireccionar()", 3000);
                          </script>';
		} else {
			$respuesta = '<script> swal("¡Ups!", "Lo sentimos no pudimos actualizar el artículo. Inténtalo de nuevo más tarde.", "error");

                            </script>';
		}
	} else {
		if ($mysql->query($sql)) {
			$respuesta = '<script> swal("¡Hurra!", "Artículo actualizado con éxito.", "success");
                          var pagina="blogs"
                      function redireccionar()
                      {
                      location.href=pagina;
                      }
                      setTimeout("redireccionar()", 3000);
                          </script>';
		} else {
			$respuesta = '<script> swal("¡Ups!", "Lo sentimos no pudimos actualizar la noticia. Inténtalo de nuevo más tarde.", "error");

                          </script>';
		}
	}

	$mysql->close();

	return printf($respuesta);
}

// PROJECTS / PROYECTOS

function newProject() {
	echo '<script>
        $("#loadimg").show();
      </script>';
	$mysql = conexionMYSQL();
	$valorRamdon = rand(1, 10000);
	$nombre = $_POST['title'];
	$intro = $_POST['shortdesc'];
	$array_type = $_POST['type_project'];

	$finalname = quitar_tildes($nombre);
	$alias = urls_amigables($finalname);

	// ARRAY DE TIPO DE PROYECTO
	$total = count($array_type);
	for ($i = 0; $i < $total; $i++) {
		$type_project = implode(", ", $array_type);
	}

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

	
		$sql = ("INSERT INTO ws_portfolio
			(nombre,
			short_desc,
			servicio,
			image,
			alias)
          VALUES('$nombre',
          	'$intro',
          	'$type_project',
          	'$imageB',
          	'$alias')
          ");
	

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
              var pagina="projects"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                  </script>';
		}
	} else {
		$respuesta = '<script> swal("¡Error!", "No se pudo agregar el registro, vuelva a intentarlo.", "error");
          var pagina="projects"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                  </script>';
	}

	$mysql->close();

	return print($respuesta);
}

function updateProject() {
	$mysql = conexionMYSQL();
	$valorRamdon = rand(1, 10000);
	$id = $_POST['id'];
	$titulo = $_POST['title'];
	$intro = $_POST['shortdesc'];
	$array_type = $_POST['type_project'];


	$finalname = quitar_tildes($titulo);
	$alias = urls_amigables($finalname);

	// ARRAY DE TIPO DE PROYECTO
	$total = count($array_type);
	for ($i = 0; $i < $total; $i++) {
		$type_project = implode(", ", $array_type);
	}

	$imagenActual = $_POST['imgactual'];
	$rimg = "../uploads/img_projects/" . $imagenActual;

	$years = date("Y");
	$month = date("m");
	$carpeta = '../uploads/img_projects/' . $years . '/' . $month . '';
	if (verifyDir($years, $month) == 'No') {
		mkdir($carpeta, 0777, true);
		$rutaimg = '../uploads/img_projects/' . $years . '/' . $month . '';
	} else {
		$rutaimg = '../uploads/img_projects/' . $years . '/' . $month . '';
	}

	$image = $_FILES["image"]["name"];
	$imageB = $years . '/' . $month . '/' . $valorRamdon . str_replace(' ', '', $image);
	$imgPath = $rutaimg . '/' . basename($imageB);
	$imgExtension = pathinfo($imgPath, PATHINFO_EXTENSION);

	
		$sql = ("UPDATE ws_portfolio SET nombre = '$titulo', short_desc = '$intro', servicio = '$type_project', alias = '$alias' WHERE id = $id");

		$sql2 = ("UPDATE ws_portfolio SET nombre = '$titulo', short_desc = '$intro', servicio = '$type_project', image = '$imageB', alias = '$alias' WHERE id = $id");
	

	if (empty($imageB)) {
		$isUploadSuccess = false;
	} else {
		$isUploadSuccess = true;
		if ($imgExtension != "jpg" && $imgExtension != "webp" && $imgExtension != "png" && $imgExtension != "jpeg" && $imgExtension != "JPG" && $imgExtension != "PNG" && $imgExtension != "WEBP" && $imgExtension != "JPEG") {
			$respuesta = '<script> swal("¡Error!", "Los archivos permitidos son: .jpg, .jpeg, .png, .gif", "error");
                  </script>';
			$isUploadSuccess = false;
		}
		if (file_exists($imgPath)) {
			$isUploadSuccess = false;
			$respuesta = '<script> swal("¡Error!", "Una imagen con ese nombre ya existe.", "error");
                  </script>';
		}
		if ($_FILES["image"]["size"] > 50000000) {

			$respuesta = '<script> swal("¡Error!", "El archivo no debe exceder el 500000 KB", "error");
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

	if ($isUploadSuccess) {

		if ($resultado = $mysql->query($sql2)) {
			if (file_exists($rimg)) {
				unlink($rimg);
			}
			$respuesta = '<script> swal("¡Hurra!", "Actualización con éxito.", "success");
                          var pagina="projects"
                      function redireccionar()
                      {
                      location.href=pagina;
                      }
                      setTimeout("redireccionar()", 3000);
                          </script>';
		} else {
			$respuesta = '<script> swal("¡Ups!", "Lo sentimos no pudimos actualizar el proyecto. Inténtalo de nuevo más tarde.", "error");
                            var pagina="projects"
                      function redireccionar()
                      {
                      location.href=pagina;
                      }
                      setTimeout("redireccionar()", 3000);
                            </script>';
		}
	} else {
		if ($mysql->query($sql)) {
			$respuesta = '<script> swal("¡Hurra!", "Actualización con éxito.", "success");
                          var pagina="projects"
                      function redireccionar()
                      {
                      location.href=pagina;
                      }
                      setTimeout("redireccionar()", 3000);
                          </script>';
		} else {
			$respuesta = '<script> swal("¡Ups!", "Lo sentimos no pudimos actualizar el proyecto. Inténtalo de nuevo más tarde.", "error");
                          var pagina="projects"
                      function redireccionar()
                      {
                      location.href=pagina;
                      }
                      setTimeout("redireccionar()", 3000);
                          </script>';
		}
	}

	$mysql->close();

	return printf($respuesta);
}

function newPhotoProject() {
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
	$imageB = $years . '/' . $month . '/' . $valorRamdon . '' . $image;
	$imgPath = $rutaimg . '/' . basename($imageB);
	$imgExtension = pathinfo($imgPath, PATHINFO_EXTENSION);

	//echo $imgPath.'----'.$contenido;

	$sql = ("INSERT INTO wg_gallery_results(id_project,image) VALUES($project_id,'$imageB')");

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
              swal("¡Urra!", "Agregado con éxito.", "success");
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
              var pagina="projects"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                  </script>';
		}
	} else {
		$respuesta = '<script> swal("¡Error!", "No se pudo agregar el registro, vuelva a intentarlo.", "error");
          var pagina="projects"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                  </script>';
	}

	$mysql->close();

	return print($respuesta);
}

// CLIENTS / CLIENTES

function newClient() {
	echo '<script>
        $("#loadimg").show();
      </script>';
	$mysql = conexionMYSQL();
	$valorRamdon = rand(1, 10000);
	$nombre = $_POST['nombre'];
	$url = $_POST['url'];

	// IMAGEN

	$image = str_replace(" ", "", $_FILES['image']['name']);
	$imageB = $valorRamdon . quitar_tildes($image);
	$imgPath = '../uploads/logo_clientes/' . basename($imageB);
	$imgExtension = pathinfo($imgPath, PATHINFO_EXTENSION);

	//echo $imgPath.'----'.$contenido;

	$sql = ("INSERT INTO ws_cliente(nombre,imagen,enlace)
          VALUES('$nombre','$imageB','$url')");

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
             var pagina="clients"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                  </script>';

		} else {
			$respuesta = '<script> swal("¡Error!", "Error en la consulta. No se ejecuto la consulta.", "error");
              var pagina="clients"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                  </script>';
		}
	} else {
		$respuesta = '<script> swal("¡Error!", "No se pudo agregar el registro, vuelva a intentarlo.", "error");
          var pagina="clients"
                function redireccionar()
                {
                location.href=pagina
                }
                setTimeout ("redireccionar()", 2000);
                  </script>';
	}

	$mysql->close();

	return print($respuesta);
}

// ADD NEWS

// NEWS IMAGES

/*function insertNewsImage()
{
$valorRamdon = generateRandomString();
$mysql = conexionMYSQL();
$titulo = $_POST['title'];
$medio = $_POST['medio'];
$fecha = $_POST['date'];
//$fecha->format('Y-m-d');
$descripcion = $_POST['description'];
$seccion = $_POST['section'];
$pagina = $_POST['page'];
$userId = $_POST['iduser'];

$image      = $_FILES["fileUpload"]["name"];
$extension = pathinfo($image,PATHINFO_EXTENSION);
$imageB     = $valorRamdon.'.'.$extension;
$keyName    = 'Noticias/'. basename($imageB);

$sql = ("INSERT INTO news(type,media,headline,datenew,description,section,page,file,user_id) VALUES(0,'$medio','$titulo','$fecha','$descripcion','$seccion','$pagina','$keyName',$userId)");

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

$pathInS3 = 'https://s3.us-west-2.amazonaws.com/' . $bucketName . '/' . $keyName;

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
return printf($respuesta);

}*/

function deleteData($tabla, $id) {
	$mysql = conexionMYSQL();
	$sql = "DELETE FROM $tabla where id=$id";
	if ($resultado = $mysql->query($sql)) {
		$respuesta = '<script> swal("¡Urra!", "Eliminado con éxito.", "success");
                    </script>';
	} else {
		$respuesta = '<script> swal("¡Error!", "No se pudo eliminar el registro. Intentar de nuevo", "error");
                    </script>';
	}

	$mysql->close();

	return printf($respuesta);

}

?>