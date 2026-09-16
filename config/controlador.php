<?php
date_default_timezone_set("America/Lima");
require_once "conexion.php";


function obtenerTiempoLectura( $content) {
  $content    = strip_tags( $content );
  $word_count = str_word_count( $content );

  $timeRead = ceil( $word_count / 200 );
 
  return ($timeRead);
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

function extractColor($img) {
	$i = imagecreatefromjpeg($img);
	$rTotal = 0;
	$vTotal = 0;
	$aTotal = 0;
	$total = 0;
	for ($x = 0; $x < imagesx($i); $x++) {
		for ($y = 0; $y < imagesy($i); $y++) {
			$rgb = imagecolorat($i, $x, $y);
			$r = ($rgb >> 16) & 0xFF;
			$v = ($rgb >> 8) & 0xFF;
			$a = $rgb & 0xFF;
			$rTotal += $r;
			$vTotal += $v;
			$aTotal += $a;
			$total++;
		}
	}
	$color1 = round($rTotal / $total);
	$color2 = round($vTotal / $total);
	$color3 = round($aTotal / $total);

	$respuesta = $color1 . ',' . $color2 . ',' . $color3;

	return ($respuesta);
}

function extractImageProject($id) {
	$routeImg = '';
	$mysql = conexionMYSQL();
	$sql = "SELECT * FROM ws_portfolio WHERE alias = '$id'";

	if ($resultado = $mysql->query($sql)) {
		while ($fila = $resultado->fetch_assoc()) {
			$routeImg = $fila['image'];
		}
		$resultado->free();
	}
	$mysql->close();
	return ($routeImg);
}

function extractVideoProject($id) {
	$routeImg = '';
	$mysql = conexionMYSQL();
	$sql = "SELECT * FROM ws_portfolio WHERE alias = '$id'";

	if ($resultado = $mysql->query($sql)) {
		while ($fila = $resultado->fetch_assoc()) {
			$routeImg = $fila['video'];
		}
		$resultado->free();
	}
	$mysql->close();
	return ($routeImg);
}

function existsVideo($id) {
	$routeImg = '';
	$valor = '';
	$mysql = conexionMYSQL();
	$sql = "SELECT * FROM ws_portfolio WHERE alias = '$id'";

	if ($resultado = $mysql->query($sql)) {
		while ($fila = $resultado->fetch_assoc()) {
			$routeImg = $fila['video'];
		}
		$resultado->free();
	}
	if ($routeImg == NULL || $routeImg == '') {
		$valor = 'No';
	} else {
		$valor = 'Si';
	}
	$mysql->close();
	return ($valor);
}

function extratIDVideoYtProject($id) {
	$routeImg = '';
	$mysql = conexionMYSQL();
	$sql = "SELECT * FROM ws_portfolio WHERE alias = '$id'";

	if ($resultado = $mysql->query($sql)) {
		while ($fila = $resultado->fetch_assoc()) {
			$routeImg = $fila['video'];
		}
		$resultado->free();
	}
	$mysql->close();
	$idvid = stristr($routeImg, "v");
	$idvid2 = substr($idvid, 2);
	return ($idvid2);
}

function extractNameProject($id) {
	$routeImg = '';
	$mysql = conexionMYSQL();
	$sql = "SELECT * FROM ws_portfolio WHERE alias = '$id'";

	if ($resultado = $mysql->query($sql)) {
		while ($fila = $resultado->fetch_assoc()) {
			$routeImg = $fila['nombre'];
		}
		$resultado->free();
	}
	$mysql->close();
	return ($routeImg);

}

function extractDescripcionProject($id) {
	$routeImg = '';
	$mysql = conexionMYSQL();
	$sql = "SELECT * FROM ws_portfolio WHERE alias = '$id'";

	if ($resultado = $mysql->query($sql)) {
		while ($fila = $resultado->fetch_assoc()) {
			$routeImg = $fila['short_desc'];
		}
		$resultado->free();
	}
	$mysql->close();

	return ($routeImg);

}

function extractIDProjectxAlias($alias) {
	$id = '';
	$mysql = conexionMYSQL();
	$sql = "SELECT * FROM ws_portfolio WHERE alias = '$alias'";

	if ($resultado = $mysql->query($sql)) {
		while ($fila = $resultado->fetch_assoc()) {
			$id = $fila['id'];
		}
		$resultado->free();
	}
	$mysql->close();

	//MUESTRA ARRAY print_r($tipoServicios);
	return ($id);
}

function extractTituloArticulo($alias) {
	$titulo = '';
	$mysql = conexionMYSQL();
	$sql = "SELECT * FROM ws_blogs WHERE alias = '$alias'";

	if ($resultado = $mysql->query($sql)) {
		while ($fila = $resultado->fetch_assoc()) {
			$titulo = $fila['title'];
		}
		$resultado->free();
	}
	$mysql->close();

	//MUESTRA ARRAY print_r($tipoServicios);
	return ($titulo);

}

function extractIntroArticulo($alias) {
	$titulo = '';
	$mysql = conexionMYSQL();
	$sql = "SELECT * FROM ws_blogs WHERE alias = '$alias'";

	if ($resultado = $mysql->query($sql)) {
		while ($fila = $resultado->fetch_assoc()) {
			$titulo = substr(strip_tags($fila['content']),0,200);
		}
		$resultado->free();
	}
	$mysql->close();

	//MUESTRA ARRAY print_r($tipoServicios);
	return ($titulo);

}

function extractImagenArticulo($alias) {
	$titulo = '';
	$mysql = conexionMYSQL();
	$sql = "SELECT * FROM ws_blogs WHERE alias = '$alias'";

	if ($resultado = $mysql->query($sql)) {
		while ($fila = $resultado->fetch_assoc()) {
			$titulo = $fila['image'];
		}
		$resultado->free();
	}
	$mysql->close();

	//MUESTRA ARRAY print_r($tipoServicios);
	return ($titulo);

}

function sendMessage($nombre, $tele, $correo, $mensa) {
	// SACAR FECHA Y HORA
	date_default_timezone_set('America/Lima');
	$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
	$dia = date("j");
	$mes = $meses[date("n") - 1];
	$year = date("Y");
	$fecha = $dia . ' de ' . $mes . ' del ' . $year;

	$hour = date("H");
	$minute = date("i");
	$seconds = date("s");
	$hora = $hour . ':' . $minute . ':' . $seconds;

	$fechafinal = $fecha . ' a las ' . $hora;

	// PROCESO DE INSERT
	$mysql = conexionMYSQL();

	$sql = ("INSERT INTO wm_messages(name,phone,email,message,fecha) VALUES('$nombre','$tele','$correo','$mensa','$fechafinal')");
	if ($resultado = $mysql->query($sql)) {

		$respuesta = '<script> swal("¡Urra!", "Tu mensaje fue enviado con éxito.", "success");
                  </script>';

	} else {
		$respuesta = '<script> swal("¡Ups!", "Ocurrió un problema, no se pudo enviar tu mensaje", "error");
             </script>';
	}
	$mysql->close();
	return printf($respuesta);
}

?>