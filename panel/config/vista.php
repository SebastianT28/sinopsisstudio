<?php

require_once "../config/conexion.php";

include_once "controlador.php";



function getNameProject($id) {

	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_portfolio WHERE id = $id";

	if ($resultado = $mysql->query($sql)) {

		$list = '';

		while ($fila = $resultado->fetch_assoc()) {

			$list .= $fila['nombre'];

		}

		$list .= '';

		$resultado->free();

		$respuesta = $list;

	}

	$mysql->close();

	return ($respuesta);

}



function selectTypeProjects() {

	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_servicios ORDER BY nombre ASC";

	if ($resultado = $mysql->query($sql)) {

		$list = '';

		while ($fila = $resultado->fetch_assoc()) {

			$list .= '<option value=' . $fila['id'] . '>' . $fila['nombre'] . '</option>';

		}

		$list .= '';

		$resultado->free();

		$respuesta = $list;

	} else {

		$respuesta = '<option value="null">Error</option>';

	}

	$mysql->close();

	return (print($respuesta));

}



function selectTypeProjectsForm($id) {

	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_servicios WHERE id != $id ORDER BY nombre ASC";

	if ($resultado = $mysql->query($sql)) {

		$list = '';

		while ($fila = $resultado->fetch_assoc()) {

			$list .= '<option value=' . $fila['id'] . '>' . $fila['nombre'] . '</option>';

		}

		$list .= '';

		$resultado->free();

		$respuesta = $list;

	} else {

		$respuesta = '<option value="null">Error</option>';

	}

	$mysql->close();

	return $respuesta;

}



function getNameService($id) {

	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_servicios WHERE id = $id";

	if ($resultado = $mysql->query($sql)) {

		$list = '';

		while ($fila = $resultado->fetch_assoc()) {

			$list .= $fila['nombre'];

		}

		$list .= '';

		$resultado->free();

		$respuesta = $list;

	}

	$mysql->close();

	return ($respuesta);

}



function widgetPortfolio() {

	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_portfolio ORDER BY id DESC LIMIT 10";

	if ($resultado = $mysql->query($sql)) {

		$viewTable = '<div class="single-table">

                        <div class="table-responsive">

                            <table class="table">';

		$viewTable .= '<thead class="text-uppercase bg-dark">';

		$viewTable .= ' <tr class="text-white">';

		$viewTable .= '<th scope="col">Nombre</th>';

		$viewTable .= '<th scope="col">Introducción</th>';

		$viewTable .= '<th scope="col">Servicio</th>';

		$viewTable .= '</tr>';

		$viewTable .= '</thead>';

		$viewTable .= '<tbody>';

		while ($fila = $resultado->fetch_assoc()) {



			$viewTable .= '<tr>';

			$viewTable .= '<th scope="row" width="40%">' . $fila['nombre'] . '</th>';

			$viewTable .= '<td style="font-size:11px;">' . $fila['short_desc'] . '</td>';

			$viewTable .= '<td>' . $fila['servicio'] . '</td>';

			$viewTable .= '</tr>';

		}

		$viewTable .= '</tbody>';

		$viewTable .= '</table></div></div>';

		$resultado->free();

		$respuesta = $viewTable;

	}

	$mysql->close();

	return (print($respuesta));

}



// USUARIOS

function viewAllUsers() {

	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_usuarios ORDER BY id";

	if ($resultado = $mysql->query($sql)) {

		$viewTable = '<table id="dataTableUser" style="width:100%">';

		$viewTable .= '<thead class="text-capitalize">';

		$viewTable .= '<tr>';

		$viewTable .= '<th>Nombre y Apellidos</th>';

		$viewTable .= '<th>Nombre de Usuario</th>';

		$viewTable .= '<th>Email</th>';

		$viewTable .= '<th>Acciones</th>';

		$viewTable .= '</tr>';

		$viewTable .= '</thead>';

		$viewTable .= '<tbody>';

		while ($fila = $resultado->fetch_assoc()) {

			$viewTable .= '<tr>';

			$viewTable .= '<th scope="row">' . $fila['nombre'] . ', ' . $fila['apellidos'] . '</th>';

			$viewTable .= '<td>' . $fila['usuario'] . '</td>';

			$viewTable .= '<td>' . $fila['email'] . '</td>';

			$viewTable .= '<td><a href="edit?p=usuarios&id=' . $fila['id'] . '"class="btn btn-rounded btn-secondary"><i class="ti-pencil-alt" style="color:#fff"></i> Editar</a>

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <a href="?t=usuarios&u=' . $fila['id'] . '" class="btn btn-rounded btn-danger"><i class="ti-trash" style="color:#fff"></i> Eliminar</a>';

			$viewTable .= '</tr>';

		}

		$viewTable .= '</tbody>';

		$viewTable .= '</table>';

		$resultado->free();

		$respuesta = $viewTable;

	}

	$mysql->close();

	return (print($respuesta));

}



// SERVICIOS



function viewAllServices() {

	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_servicios ORDER BY id";

	if ($resultado = $mysql->query($sql)) {

		$viewTable = '<table id="dataTableUser" style="width:100%">';

		$viewTable .= '<thead class="text-capitalize">';

		$viewTable .= '<tr>';

		$viewTable .= '<th>Servicio</th>';

		$viewTable .= '<th>Acciones</th>';

		$viewTable .= '</tr>';

		$viewTable .= '</thead>';

		$viewTable .= '<tbody>';

		while ($fila = $resultado->fetch_assoc()) {

			$viewTable .= '<tr>';

			$viewTable .= '<th scope="row">' . $fila['nombre'] . '</th>';

			$viewTable .= '<td><a href="edit?p=servicios&id=' . $fila['id'] . '"class="btn btn-rounded btn-secondary"><i class="ti-pencil-alt" style="color:#fff"></i> Editar</a>

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <a href="?t=servicios&u=' . $fila['id'] . '" class="btn btn-rounded btn-danger"><i class="ti-trash" style="color:#fff"></i> Eliminar</a>';

			$viewTable .= '</tr>';

		}

		$viewTable .= '</tbody>';

		$viewTable .= '</table>';

		$resultado->free();

		$respuesta = $viewTable;

	}

	$mysql->close();

	return (print($respuesta));

}



// END SERVICIOS



function viewAllBlog() {

	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_blogs";

	if ($resultado = $mysql->query($sql)) {

		$viewTable = '<table id="dataTableNews" style="width:100%">';

		$viewTable .= '<thead class="text-capitalize">';

		$viewTable .= '<tr>';

		$viewTable .= '<th>Título</th>';

		$viewTable .= '<th>Fecha</th>';

		$viewTable .= '<th>Acciones</th>';

		$viewTable .= '</tr>';

		$viewTable .= '</thead>';

		$viewTable .= '<tbody>';

		while ($fila = $resultado->fetch_assoc()) {



			// FECHA CORTADA



			$fulldate = $fila['created_date'];

			$dateMini = explode(' ', $fulldate);

			$dateEnd = $dateMini[0];



			$viewTable .= '<tr>';

			$viewTable .= '<th scope="row" width="40%">' . $fila['title'] . '</th>';

			$viewTable .= '<td>' . $fila['created_date'] . '</td>';

			$viewTable .= '<td>

                                <a href="edit?id=' . $fila['id'] . '&p=blogs" class="btn btn-rounded btn-secondary m-2"><i class="ti-pencil-alt" style="color:#fff"></i> Editar</a>

                                <a href="?t=blogs&u=' . $fila['id'] . '&image=' . $fila['image'] . '" class="btn btn-danger btn-rounded m-2" style="color:#fff"><i class="ti-trash" style="color:#fff"></i> Eliminar</a>

                               </td>';

			$viewTable .= '</tr>';

		}

		$viewTable .= '</tbody>';

		$viewTable .= '</table>';

		$resultado->free();

		$respuesta = $viewTable;

	}

	$mysql->close();

	return (print($respuesta));

}



function viewAllPortfolio() {

	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_portfolio";

	if ($resultado = $mysql->query($sql)) {

		$viewTable = '<table id="dataTableNews" style="width:100%">';

		$viewTable .= '<thead class="text-capitalize">';

		$viewTable .= '<tr>';

		$viewTable .= '<th>Título</th>';

		$viewTable .= '<th>Descripción</th>';

		$viewTable .= '<th>Acciones</th>';

		$viewTable .= '<th>Fotos</th>';

		$viewTable .= '</tr>';

		$viewTable .= '</thead>';

		$viewTable .= '<tbody>';

		while ($fila = $resultado->fetch_assoc()) {



			// FECHA CORTADA



			//$fulldate = $fila['created_date'];

			//$dateMini = explode(' ',$fulldate);

			//$dateEnd = $dateMini[0];



			$viewTable .= '<tr>';

			$viewTable .= '<th scope="row" width="20%">' . $fila['nombre'] . '</th>';

			$viewTable .= '<td width="27%">' . $fila['short_desc'] . '</td>';

			$viewTable .= '<td style="text-align:center">

                                <a href="edit?id=' . $fila['id'] . '&p=projects" class="btn btn-rounded btn-secondary m-2"><i class="ti-pencil-alt" style="color:#fff"></i> Editar</a>

                                <a href="?t=portfolio&u=' . $fila['id'] . '&image=' . $fila['image'] . '" class="btn btn-danger btn-rounded" style="color:#fff"><i class="ti-trash" style="color:#fff"></i> Eliminar</a>

                               </td>';

			$viewTable .= '<td style="text-align:center">

                                <a class="btn btn-success btn-rounded m-2" style="color:#fff" onclick="addPhotoProject(' . $fila['id'] . ')"><i class="ti-gallery" style="color:#fff"></i> Agregar</a>

                                <a class="btn btn-info btn-rounded" style="color:#fff" onclick="viewPhotosProject(' . $fila['id'] . ')"><i class="ti-eye" style="color:#fff"></i> Ver Fotos</a>

                               </td>';

			$viewTable .= '</tr>';

		}

		$viewTable .= '</tbody>';

		$viewTable .= '</table>';

		$resultado->free();

		$respuesta = $viewTable;

	}

	$mysql->close();

	return (print($respuesta));

}



// VIEW CLIENTS - CLIENTES



function viewAllClients() {

	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_cliente";

	if ($resultado = $mysql->query($sql)) {

		$viewTable = '<table id="dataTableClients" style="width:100%">';

		$viewTable .= '<thead class="text-capitalize">';

		$viewTable .= '<tr>';

		$viewTable .= '<th>Nombre</th>';

		$viewTable .= '<th>Logo</th>';

		$viewTable .= '<th>Acciones</th>';

		$viewTable .= '</tr>';

		$viewTable .= '</thead>';

		$viewTable .= '<tbody>';

		while ($fila = $resultado->fetch_assoc()) {



			// FECHA CORTADA



			//$fulldate = $fila['created_date'];

			//$dateMini = explode(' ',$fulldate);

			//$dateEnd = $dateMini[0];



			$viewTable .= '<tr>';

			$viewTable .= '<th scope="row">' . $fila['nombre'] . '</th>';

			$viewTable .= '<td><img src="../uploads/logo_clientes/' . $fila['imagen'] . '" alt="' . $fila['nombre'] . '" width="150px"></td>';

			$viewTable .= '<td>

                                <a href="edit?id=' . $fila['id'] . '&p=cliente" class="btn btn-rounded btn-secondary m-2"><i class="ti-pencil-alt" style="color:#fff"></i> Editar</a>

                                <a href="?t=cliente&u=' . $fila['id'] . '&image=' . $fila['imagen'] . '" class="btn btn-danger btn-rounded" style="color:#fff"><i class="ti-trash" style="color:#fff"></i> Eliminar</a>

                               </td>';

			$viewTable .= '</tr>';

		}

		$viewTable .= '</tbody>';

		$viewTable .= '</table>';

		$resultado->free();

		$respuesta = $viewTable;

	}

	$mysql->close();

	return (print($respuesta));

}



// VIEW GALLERY PHOTOS



function viewGalleryProjects($id) {

	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_gallery_portfolio WHERE id_portfolio = $id";

	if ($resultado = $mysql->query($sql)) {



		if (mysqli_num_rows($resultado) != 0) {

			$viewTable = '<div class="row">';

			while ($fila = $resultado->fetch_assoc()) {



				$viewTable .= '<div class="col-md-3">';



				$viewTable .= '<img src="../uploads/img_projects/' . $fila['image'] . '" style="margin-bottom:10px;" class="img-thumbnail">';



				$viewTable .= '<a href="?t=gallery_portfolio&u=' . $fila['id'] . '&image=' . $fila['image'] . '" class="btn btn-danger" style="color:#fff">Eliminar</a>';



				$viewTable .= '</div>';



			}

			$viewTable .= '</div>';

			$resultado->free();

		} else {

			$viewTable = '<div class="row">';

			$viewTable .= '<div class="col-md-12" style="text-align:center;">';

			$viewTable .= '<p>NO HAY FOTOS. SUBA ALGUNA</p>';

			$viewTable .= '</div>';

			$viewTable .= '</div>';

		}



		$respuesta = $viewTable;

	}

	$mysql->close();

	return (print($respuesta));

}



function viewEditUser() {

	$mysql = conexionMYSQL();

	$idU = $_GET['id'];

	$sql = "SELECT * FROM wg_users WHERE id = $idU";

	if ($resultado = $mysql->query($sql)) {

		while ($fila = $resultado->fetch_assoc()) {

			$nombreuser = $fila['username'];

		}

		$resultado->free();

		$respuesta = '<h4 class="header-title">Editar Usuario ' . $nombreuser . '</h4>

                    <form action="edit?p=users&id=' . $idU . '" method="post">

                        <div class="form-row">

                            <div class="col-md-4 mb-3">

                                <label>Nuevo Password</label>

                                <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Llenar solo si desea cambiar">

                            </div>

                        </div>

                        <input type="hidden" value="' . $idU . '" name="iduser" id="iduser">

                        <input type="submit" class="btn btn-rounded btn-dark mt-4 pr-4 pl-4" value="Editar" name="btnEditUser">

                    </form>';

	} else {

		$respuesta = 'Error';

	}



	$mysql->close();

	return (print($respuesta));

}



function viewEditNew() {

	$mysql = conexionMYSQL();

	$id = $_GET['id'];

	$sql = "SELECT * FROM ws_blogs WHERE id = $id";

	if ($resultado = $mysql->query($sql)) {

		while ($fila = $resultado->fetch_assoc()) {

			$title = $fila['title'];

			$contenido = $fila['content'];

			$archivo = $fila['image'];

			$autor = $fila['author'];

			$tags = $fila['tags'];

			$imagen = $fila['image'];

		}

		$resultado->free();

		$respuesta = '<h4 class="header-title">Editando artículo &mdash; ' . $title . '</h4>

                    <form action="edit?id=' . $id . '" method="post" enctype="multipart/form-data">

                        <div class="col-md-6" style="margin-left:auto;margin-right:auto;margin-bottom:1em;margin-top:1em;">

                            <img src="../uploads/img_articles/' . $archivo . '" alt="" style="max-width:100%;display:block;">

                        </div>

                        <div class="form-row">

                            <div class="col-md-4 mb-3" style="margin-left:auto;margin-right:auto;">

                                <label>Cargar imagen (solo si desea cambiar de imagen)</label>

                                <input type="file" class="form-control" name="image">

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="col-md-4 mb-3">

                                <label>Título</label>

                                <input type="text" required class="form-control" name="title" id="title" autocomplete="off" maxlength="400" value="' . $title . '">

                            </div>

                            <div class="col-md-4 mb-3">

                                <label>Autor</label>

                                <input type="text" required class="form-control" name="autor" id="author" autocomplete="off" maxlength="400" value="' . $autor . '">

                            </div>

                            <div class="col-md-4 mb-3">

                                <label>Etiquetas (separadas por comas)</label>

                                <input type="text" required class="form-control" name="tags" id="tags" autocomplete="off" maxlength="500" value="' . $tags . '">

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="col-md-12" style="margin-left:auto;margin-right:auto;margin-bottom:2em;">

                                <label>Descripción</label>

                                <textarea class="form-control" name="content" id="editor1" required autocomplete="off" rows="10">' . $contenido . '</textarea>

                            </div>

                        </div>



                        <input type="hidden" value="' . $id . '" name="id">

                        <input type="hidden" value="' . $imagen . '" name="imgactual">

                        <div class="col-md-12 mb-3" style="text-align:center;">

                        <small class="text-danger">Advertencia! Por favor, no cierre esta ventana mientras se actualiza. Al terminar el proceso, serás redireccionado automáticamente.</small>

                        </div>



                        <div class="modal-footer">

                            <input type="submit" name="btnEditArticle" id="btneditArticle" class="btn btn-rounded btn-success" value="Actualizar">

                            <a href="blogs" class="btn btn-rounded btn-dark">Regresar</a>

                        </div>

                    </form>';



	} else {

		$respuesta = 'Error';

	}



	$mysql->close();

	return (print($respuesta));

}



function viewEditProject() {

	$mysql = conexionMYSQL();

	$id = $_GET['id'];

	$sql = "SELECT * FROM ws_portfolio WHERE id = $id";

	if ($resultado = $mysql->query($sql)) {

		while ($fila = $resultado->fetch_assoc()) {

			$title = $fila['nombre'];

			$short_desc = $fila['short_desc'];

			$type_project = $fila['servicio'];

			$image = $fila['image'];

			$imagenactual = $fila['image'];

		}

		$resultado->free();

		$respuesta = '<h4 class="header-title">Editando proyecto &mdash; ' . $title . '</h4>

                    <form action="edit?id=' . $id . '&p=projects" method="post" enctype="multipart/form-data">

                        <div class="col-md-6" style="margin-left:auto;margin-right:auto;margin-bottom:1em;margin-top:1em;">

                            <img src="../uploads/img_projects/' . $image . '" alt="" style="max-width:50%;display:block;margin:10px auto">

                        </div>

                        <div class="form-row">

                            <div class="col-md-4 mb-3" style="margin-left:auto;margin-right:auto;">

                                <label>Cargar imagen (solo si desea cambiar de imagen)</label>

                                <input type="file" class="form-control" name="image">

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="col-md-6 mb-3">

                                <label>Nombre del proyecto *</label>

                                <input type="text" required class="form-control" name="title" id="title" autocomplete="off" maxlength="200" value="' . $title . '">

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>Tipo de Proyecto *</label>

                                <select class="selectpicker form-control" name="type_project[]"  data-live-search="true">

                                <option value="' . $type_project . '" selected>' . getNameService($type_project) . '</option>

                                ' . selectTypeProjectsForm($type_project) . '

                            </select>

                            </div>

                        </div>



                        <div class="form-row">

                            <div class="col-md-12 mb-3">

                                <label>Introducción (150 caracteres) *</label>

                                <textarea class="form-control" name="shortdesc" id="shortdesc" maxlength="150" required autocomplete="off" rows="2">' . $short_desc . '</textarea>

                            </div>

                        </div>

    

                        <input type="hidden" value="' . $id . '" name="id">

                        <input type="hidden" value="' . $imagenactual . '" name="imgactual">

                        <div class="col-md-12 mb-3" style="text-align:center;">

                        <small class="text-danger">Advertencia! Por favor, no cierre esta ventana mientras se actualiza. Al terminar el proceso, serás redireccionado automáticamente.</small>

                        </div>



                        <div class="modal-footer">

                            <input type="submit" name="btnEditProject" id="btneditProject" class="btn btn-rounded btn-success" value="Actualizar">

                            <a href="projects" class="btn btn-rounded btn-dark">Regresar</a>

                        </div>

                    </form>';



	} else {

		$respuesta = 'Error';

	}



	$mysql->close();

	return (print($respuesta));

}



?>

