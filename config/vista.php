<?php

require_once "conexion.php";

include_once "controlador.php";



function cambiarFormatoFechaOriginal($fecha) {

	$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',

		'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre');

	$fechaHora = explode(" ", $fecha);

	// 2020-01-09 15:22:24

	//$arrayFecha = $fechaHora[0];

	$arrayHora = $fechaHora[1];

	$arrayFecha = explode("-", $fechaHora[0]);

	$anio = $arrayFecha[0];

	$mes = $arrayFecha[1];

	$dia = $arrayFecha[2];

	return ($dia . " de " . $meses[$mes - 1] . " del " . $anio);

}



function cambiarFormatoFechaHoraOriginal($fecha) {

	$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',

		'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre');

	$fechaHora = explode(" ", $fecha);

	// 2020-01-09 15:22:24

	//$arrayFecha = $fechaHora[0];

	$arrayHora = $fechaHora[1];

	$arrayFecha = explode("-", $fechaHora[0]);

	$anio = $arrayFecha[0];

	$mes = $arrayFecha[1];

	$dia = $arrayFecha[2];

	return ($dia . " de " . $meses[$mes - 1] . " del " . $anio . " " . $arrayHora);

}



function cambiarNumeroMes($mes) {

	$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',

		'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre');

	return $meses[$mes - 1];

}



// LOGO CLIENTES

function viewCarouselClients() {

	$mysql = conexionMYSQL();



	$sql = "SELECT * FROM ws_cliente ORDER BY id DESC";

	if ($resultado = $mysql->query($sql)) {

		$view = '<div class="columns_logo f-container">';

		while ($fila = $resultado->fetch_assoc()) {

			$view .= '<div class="logo_column">';

			$view .= '<a href="' . $fila['enlace'] . '" target="_blank">';

			$view .= '<img loading="lazy" src="uploads/logo_clientes/' . $fila['imagen'] . '" alt="' . $fila['nombre'] . '" title="' . $fila['nombre'] . '">';

			$view .= '</a>';

			$view .= '</div>';

		}

		$view .= '</div>';

		$resultado->free();

		$respuesta = $view;

	}

	$mysql->close();

	return (print($respuesta));

}



// PROYECTOS SINOPSIS



function nombreTypeProjectID() {

	$nombre = Array();



	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_servicios";



	if ($resultado = $mysql->query($sql)) {

		while ($fila = $resultado->fetch_assoc()) {

			$nombre[$fila['id']] = $fila['nombre'];

		}

		$resultado->free();

	}

	$mysql->close();



	//MUESTRA ARRAY print_r($tipoServicios);

	return ($nombre);

}



function aliasTypeProjectID() {

	$nombre = Array();



	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_servicios";



	if ($resultado = $mysql->query($sql)) {

		while ($fila = $resultado->fetch_assoc()) {

			$nombre[$fila['id']] = $fila['alias'];

		}

		$resultado->free();

	}

	$mysql->close();



	//MUESTRA ARRAY print_r($tipoServicios);

	return ($nombre);

}



function viewFiltersProjects() {

	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_servicios";



	if ($resultado = $mysql->query($sql)) {

		$view = '<ul class="portfolio-filter">';

		$view .= '<li><a class="view-more current" href="#" data-filter="*">Ver todo</a></li>';

		while ($fila = $resultado->fetch_assoc()) {

			$idType = $fila['id'];

			$sql2 = "SELECT * FROM ws_portfolio WHERE servicio LIKE '%$idType%'";

			if (mysqli_num_rows($mysql->query($sql2)) != 0) {

				$view .= '<li class="' . $fila['alias'] . '"><a class="view-more" href="#" data-filter=".' . $fila['alias'] . '">' . $fila['nombre'] . '</a></li>';

			}

		}

		$view .= '</ul>';

		$resultado->free();

		$respuesta = $view;

	}

	$mysql->close();

	return (print($respuesta));

}



function viewProjects() {

	$mysql = conexionMYSQL();

	$aliasTypeProject = aliasTypeProjectID();

	$nombreCategoria = nombreTypeProjectID();

	$sql = "SELECT * FROM ws_portfolio ORDER BY RAND()";

	if ($resultado = $mysql->query($sql)) {

		$view = '<div class="portfolio-grid portfolio-grid-v2 portfolio-layout-masonry">';

		while ($fila = $resultado->fetch_assoc()) {

			$services = quitar_tildes($fila['servicio']);

			$aliasServices = strtolower($services);



			$arrayTypeProjects = explode(", ", $fila['servicio']);

			$totalTypeProjects = count($arrayTypeProjects);



			$aliasFilter = "";



			if ($totalTypeProjects > 1) {

				for ($j = 0; $j < $totalTypeProjects; $j++) {

					$aliasFilter .= $aliasTypeProject[$arrayTypeProjects[$j]];

					if ($j < ($totalTypeProjects - 1)) {

						$aliasFilter .= ' ';

					}

				}

			} else {

				$aliasFilter .= $aliasTypeProject[$arrayTypeProjects[0]];

			}



			$view .= '<div class="item-portfolio item-portfolio-v2 item-4cols ' . $aliasFilter . '">';

			$view .= '<div class="item-portfolio-holder-v2">';

			$view .= '<div class="post-image item-grid-image-v2">';

			$view .= '<img loading="lazy" src="uploads/img_projects/' . $fila['image'] . '" class="img-grid-v2">';

			$view .= '<a href="portafolio/' . $fila['alias'] . '" aria-label="Ver ' . $fila['nombre'] .'"></a>';

			$view .= '</div>';

			$view .= '<div class="item-text-holder-v2">';

			$view .= '<h2 class="item-title display-6"><a href="portafolio/' . $fila['alias'] . '">' . $fila['nombre'] . '</a></h2>';

			$view .= '<ul class="portfolio-categ portfolio-categ-v2"><li><a href="portafolio/' . $fila['alias'] . '" >';

			if ($totalTypeProjects > 1) {

				for ($j = 0; $j < $totalTypeProjects; $j++) {

					$view .= $nombreCategoria[$arrayTypeProjects[$j]];

					if ($j < ($totalTypeProjects - 1)) {

						$view .= ', ';

					}

				}

			} else {

				$view .= $nombreCategoria[$arrayTypeProjects[0]];

			}

			$view .= '</a></li></ul>';



			$view .= '</div></div>';

			$view .= '</div>';

		}

		$view .= '</div>';

		$resultado->free();

		$respuesta = $view;

	}

	$mysql->close();

	return (print($respuesta));

}



function viewIntroProjects($id) {

	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_portfolio WHERE alias = '$id'";

	if ($resultado = $mysql->query($sql)) {

		if (mysqli_num_rows($resultado) > 0) {

			$view = '';

			while ($fila = $resultado->fetch_assoc()) {

				$view .= '<div class="two_column"><p>';

				$view .= $fila['short_desc'];

				$view .= '</p></div>';

			}

			$resultado->free();

		} else {

			$view = '<script type="text/javascript">

                              window.location="proyectos";

                              </script>';

		}



		$respuesta = $view;

	}

	$mysql->close();

	return (print($respuesta));

}



function viewServiceProjects($id) {

	$mysql = conexionMYSQL();

	$nombreCategoria = nombreTypeProjectID();

	$sql = "SELECT * FROM ws_portfolio WHERE alias = '$id'";

	if ($resultado = $mysql->query($sql)) {

		$view = '<h2>Servicio realizado</h2>';

		while ($fila = $resultado->fetch_assoc()) {

			$arrayTypeProjects = explode(", ", $fila['servicio']);

			$totalTypeProjects = count($arrayTypeProjects);

			$view .= '<p>';

			if ($totalTypeProjects > 1) {

				for ($j = 0; $j < $totalTypeProjects; $j++) {

					$view .= $nombreCategoria[$arrayTypeProjects[$j]];

					if ($j < ($totalTypeProjects - 1)) {

						$view .= ', ';

					}

				}

			} else {

				$view .= $nombreCategoria[$arrayTypeProjects[0]];

			}

			$view .= '</p>';

		}

		$resultado->free();

		$respuesta = $view;

	}

	$mysql->close();

	return (print($respuesta));

}



function viewLinkPortfolio($id) {

	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_portfolio WHERE alias = '$id'";

	if ($resultado = $mysql->query($sql)) {

		$view = '';

		while ($fila = $resultado->fetch_assoc()) {

			if ($fila['link_result'] != NULL || $fila['link_result'] != '') {

				$view .= '

                <hr class="line-portfolio">

                <a href="' . $fila['link_result'] . '" class="cta" target="_blank">

                    <span>Ver proyecto</span>

                </a>

                ';

			}



		}

		$resultado->free();

		$respuesta = $view;

	}

	$mysql->close();

	return (print($respuesta));

}



function viewDetailsProjects($id) {

	$mysql = conexionMYSQL();

	$sql = "SELECT * FROM ws_portfolio WHERE alias = '$id'";

	if ($resultado = $mysql->query($sql)) {

		$view = '';

		while ($fila = $resultado->fetch_assoc()) {

			$view .= '<p>';

			$view .= $fila['short_desc'];

			$view .= '</p>';

		}

		$resultado->free();

		$respuesta = $view;

	}

	$mysql->close();

	return (print($respuesta));

}



function viewGalleryProjects($alias) {

	$mysql = conexionMYSQL();

	$id = extractIDProjectxAlias($alias);

	$sql = "SELECT * FROM ws_gallery_portfolio WHERE id_portfolio = $id";

	if ($resultado = $mysql->query($sql)) {

			$view = '';

			while ($fila = $resultado->fetch_assoc()) {

				$view .='<div class="item-justify item-3cols gallery-post">';

					$view .='<a href="uploads/img_projects/' . $fila['image'] . '" class="lightbox">';

						$view .='<img class="img-fluid" loading="lazy" src="uploads/img_projects/' . $fila['image'] . '">';

					$view .='</a>';

				$view .='</div>';

			}

			//$view .= '</div>';

			$resultado->free();

		

		$respuesta = $view;

	}

	$mysql->close();

	return (print($respuesta));

}



function widgetProjects() {

	$mysql = conexionMYSQL();

	$aliasTypeProject = aliasTypeProjectID();

	$nombreCategoria = nombreTypeProjectID();

	$sql = "SELECT * FROM ws_portfolio ORDER BY RAND()";

	if ($resultado = $mysql->query($sql)) {

		$view = '<div class="portfolio-slider portfolio-grid portfolio-grid-v2">

		<div class="swiper-wrapper">';

		while ($fila = $resultado->fetch_assoc()) {

			

			$arrayTypeProjects = explode(", ", $fila['servicio']);

			$totalTypeProjects = count($arrayTypeProjects);





			$view .= '<div class="swiper-slide item-slider">';

			$view .= '<div class="widgetproject">';

			$view .= '<div class="item-portfolio-holder-v2">';

			$view .= '<div class="post-image item-grid-image-v2">';

			$view .= '<img loading="lazy" src="uploads/img_projects/' . $fila['image'] . '" class="img-grid-v2" alt="' . $fila['nombre'] . '">';

			$view .= '<a href="portafolio/' . $fila['alias'] . '" aria-label="Ver ' . $fila['nombre'] .'"></a>';

			$view .= '</div>';

			$view .= '<div class="item-text-holder-v2">';

			$view .= '<h3 class="item-title display-6"><a href="portafolio/' . $fila['alias'] . '">' . $fila['nombre'] . '</a></h3>';

			$view .= '<ul class="portfolio-categ portfolio-categ-v2"><li><a href="portafolio/' . $fila['alias'] . '" >';

			if ($totalTypeProjects > 1) {

				for ($j = 0; $j < $totalTypeProjects; $j++) {

					$view .= $nombreCategoria[$arrayTypeProjects[$j]];

					if ($j < ($totalTypeProjects - 1)) {

						$view .= ', ';

					}

				}

			} else {

				$view .= $nombreCategoria[$arrayTypeProjects[0]];

			}

			$view .= '</a></li></ul>';



			$view .= '</div></div>';

			$view .= '</div>';

			$view .= '</div>';

		}

		$view .= '</div>



		<div class="swiper-mt-button-prev portfolio-slider-btn-prev">

								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55" style="enable-background:new 0 0 55 55;" xml:space="preserve">

									<path d="M33.2,28.3l-8.8,8.8c-0.4,0.4-1.1,0.4-1.5,0l-1-1c-0.4-0.4-0.4-1.1,0-1.5l7-7l-7-7c-0.4-0.4-0.4-1.1,0-1.5l1-1

										c0.4-0.4,1.1-0.4,1.5,0l8.8,8.8C33.6,27.2,33.6,27.8,33.2,28.3z"></path>

									<path d="M27.5,55C12.3,55,0,42.7,0,27.5S12.3,0,27.5,0S55,12.3,55,27.5S42.7,55,27.5,55z M27.5,5C15.1,5,5,15.1,5,27.5

										S15.1,50,27.5,50S50,39.9,50,27.5S39.9,5,27.5,5z"></path>

								</svg>

							</div>

							<div class="swiper-mt-button-next portfolio-slider-btn-next">

								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55" style="enable-background:new 0 0 55 55;" xml:space="preserve">

									<path d="M33.2,28.3l-8.8,8.8c-0.4,0.4-1.1,0.4-1.5,0l-1-1c-0.4-0.4-0.4-1.1,0-1.5l7-7l-7-7c-0.4-0.4-0.4-1.1,0-1.5l1-1

										c0.4-0.4,1.1-0.4,1.5,0l8.8,8.8C33.6,27.2,33.6,27.8,33.2,28.3z"></path>

									<path d="M27.5,55C12.3,55,0,42.7,0,27.5S12.3,0,27.5,0S55,12.3,55,27.5S42.7,55,27.5,55z M27.5,5C15.1,5,5,15.1,5,27.5

										S15.1,50,27.5,50S50,39.9,50,27.5S39.9,5,27.5,5z"></path>

								</svg>

							</div>



		</div>';

		$resultado->free();

		$respuesta = $view;

	}

	$mysql->close();

	return (print($respuesta));

}



function widgetLastProjects() {

	$mysql = conexionMYSQL();

	$aliasTypeProject = aliasTypeProjectID();

	$nombreCategoria = nombreTypeProjectID();

	$sql = "SELECT * FROM ws_portfolio ORDER BY id DESC LIMIT 4";

	if ($resultado = $mysql->query($sql)) {

		$view = '<div class="columns projects-carousel f-container">';

		while ($fila = $resultado->fetch_assoc()) {

			$services = quitar_tildes($fila['servicio']);

			$aliasServices = strtolower($services);



			$arrayTypeProjects = explode(", ", $fila['servicio']);

			$totalTypeProjects = count($arrayTypeProjects);



			$view .= '<div class="portfolio_column">';

			$view .= '<a href="portafolio/' . $fila['alias'] . '">';

			$view .= '<div class="box_portfolio">';

			$view .= '<div class="overlay_portfolio">';

			$view .= '<img loading="lazy" src="img/blank.png">';

			$view .= '<div class="img_portfolio" style="background-image:url(uploads/img_projects/' . $fila['image'] . ');"></div>';

			$view .= '<div class="color_portfolio__overlay"></div>';

			$view .= '<div class="box_portfolio__details">';

			$view .= '<p class="category_portfolio">';

			if ($totalTypeProjects > 1) {

				for ($j = 0; $j < $totalTypeProjects; $j++) {

					$view .= $nombreCategoria[$arrayTypeProjects[$j]];

					if ($j < ($totalTypeProjects - 1)) {

						$view .= ', ';

					}

				}

			} else {

				$view .= $nombreCategoria[$arrayTypeProjects[0]];

			}

			$view .= '</p>';

			$view .= '<h4 class="name_portfolio">' . $fila['nombre'] . '</h4>';

			$view .= '</div>';

			$view .= '<div class="cursor-overlay"></div>';

			$view .= '</div>';

			$view .= '</div>';

			$view .= '</a>';

			$view .= '</div>';

		}

		$view .= '</div>';

		$resultado->free();

		$respuesta = $view;

	}

	$mysql->close();

	return (print($respuesta));

}





function homeThirdProject()

{

	$mysql = conexionMYSQL();

	$aliasTypeProject = aliasTypeProjectID();

	$sql = "SELECT * FROM ws_portfolio ORDER BY id DESC LIMIT 3";

	if ($resultado = $mysql->query($sql)) {

		$view = '';

		while ($fila = $resultado->fetch_assoc()) {

			$view .= '<div class="overlay_project">';

			$view .= '<img loading="lazy" src="img/blank.png">';

			$view .= '<div class="img_project" style="background-image:url(uploads/img_projects/' . $fila['image'] . ');"></div>';

			$view .= '<div class="color_overlay"></div>';

			$view .= '<div class="box_project__mobile">';

			$view .= '<div class="btn-project animate__animated animate__pulse animate__infinite animate__slow">';

			$view .= '<i class="flaticon-plus"></i>';

			$view .= '</div>';

			$view .= '</div>';

			$view .= '<div class="box_project__details">';

			$view .= '<h4 class="name_project">'. $fila['nombre'] .'</h4>';

			$view .= '<p class="details_project">'. $fila['short_desc'] .'</p>';

			$view .= '</div>';

			$view .= '<div class="cursor-overlay"></div>';

			$view .= '</div>';

		}

		$resultado->free();

		$respuesta = $view;

	}

	$mysql->close();

	return (print($respuesta));



}



function homeTwoProject()

{

	$mysql = conexionMYSQL();

	$aliasTypeProject = aliasTypeProjectID();

	$sql = "SELECT * FROM ws_portfolio ORDER BY id ASC LIMIT 2";

	if ($resultado = $mysql->query($sql)) {

		$view = '';

		while ($fila = $resultado->fetch_assoc()) {

			$view .= '<div class="overlay_project">';

			$view .= '<img loading="lazy" src="img/blank.png">';

			$view .= '<div class="img_project" style="background-image:url(uploads/img_projects/' . $fila['image'] . ');"></div>';

			$view .= '<div class="color_overlay"></div>';

			$view .= '<div class="box_project__mobile">';

			$view .= '<div class="btn-project animate__animated animate__pulse animate__infinite animate__slow">';

			$view .= '<i class="flaticon-plus"></i>';

			$view .= '</div>';

			$view .= '</div>';

			$view .= '<div class="box_project__details">';

			$view .= '<h4 class="name_project">'. $fila['nombre'] .'</h4>';

			$view .= '<p class="details_project">'. $fila['short_desc'] .'</p>';

			$view .= '</div>';

			$view .= '<div class="cursor-overlay"></div>';

			$view .= '</div>';

		}

		$resultado->free();

		$respuesta = $view;

	}

	$mysql->close();

	return (print($respuesta));



}



// BLOG



function viewBlog()

{

    $mysql = conexionMYSQL();

    $sql = "SELECT * FROM ws_blogs ORDER BY id DESC";

    if($resultado = $mysql->query($sql))

    {

        $totalRegistros = mysqli_num_rows($resultado);

        if($totalRegistros == 0)

        {

            $respuesta = '';

        }

        else

        {

            // INICIA PAGINACIÓN

            //Limitar mi consulta SQL

                $regXPag = 8;

                $pagina = false;

                //Examinar la página a mostrar y el inicio del registro a mostrar

                if(isset($_GET["p"]))

                {

                    $page = trim($_GET['p'],'/');

                    $pagina = $page;

                    //$pagina = $_GET["p"];

                }

                if(!$pagina)

                {

                    $inicio = 0;

                    $pagina = 1;

                }

                else

                {

                    $inicio = ($pagina - 1) * $regXPag;

                }

                //calculó el total de páginas

                $totalPaginas = ceil($totalRegistros/$regXPag);

                $sql .= " LIMIT ".$inicio.",".$regXPag;

                //echo $sql."<br />".$totalPaginas;

                $resultado = $mysql->query($sql);

                //despliegue de  la paginación

                $paginacion = '<div class="l-container center">';

                    $paginacion .= '<p>';

                        //$paginacion .= 'Total de artículos: <b>'.$totalRegistros.'</b>. ';

                        $paginacion .= 'Página <b class="main-color">'.$pagina.'</b> de <b>'.$totalPaginas.'</b>.';

                    $paginacion .= "</p>";

                    if($totalPaginas>1)

                    {

                            $paginacion .= ($pagina!=1)?'<a rel="prev" href="blog/'.($pagina-1).'" class="cta"><span><i class="flaticon-left-arrow"></i> Anterior</span></a>&nbsp;':'';

                            

                            $paginacion .= ($pagina!=$totalPaginas)?'&nbsp;<a rel="next" href="blog/'.($pagina+1).'" class="cta"><span>Siguiente <i class="flaticon-right-arrow"></i></span></a>':'';

                    }

                $paginacion .= '</div>';

            /* TERMINA PAGINACIÓN */





            $list = '<div class="columns-blog xl-container">';

            while($fila = $resultado->fetch_assoc())

            {

                

                $list .= '<div class="four_column-blog">';

                $list .= '<a href="articulo/'.$fila['alias'].'" title="'.$fila['title'].'">';

                    $list .= '<div class="blog-box">';

                        $list .= '<div class="blog-img">';

                            $list .= '<div class="blog-img__bg" style="background-image:url(uploads/img_articles/'.$fila['image'].');"></div>';

                        $list .= '</div>';

                        $list .= '<div class="blog-box__details">';

                            $list .= '<h3 class="blog-box__title">'.$fila['title'].'</h3>';

                            $list .= '<p class="blog-box__date">'.cambiarFormatoFechaOriginal($fila['created_date']).' - '.obtenerTiempoLectura($fila['content']).' minutos</p>';

                        $list .= '</div>';

                    $list .= '</div>';

                $list .= '</a>';

                $list .= '</div>';

    

            }

            $list .= '</div>';

            $resultado->free();

            $respuesta = $list.' '.$paginacion;

        }

    }

    $mysql->close();

    return(print($respuesta));



}



// ARTICULO / ARTICLE



function viewHeaderArticle($alias){

    $mysql = conexionMYSQL();

    $sql = "SELECT * FROM ws_blogs WHERE alias = '$alias'";

    if($resultado = $mysql->query($sql)){

        if(mysqli_num_rows($resultado) > 0)

        {

            $list  = '<section class="header-page__container center">';

            while($fila = $resultado->fetch_assoc())

            {

                $list .= '<div class="header-pages__content blogs">';

                	$list .= '<div class="xl-container">';

	                    $list .= '<h1>'.$fila['title'].'</h1>';

	                    $list .= '<div class="articles_headers"><p>';

		                    $list .= '<span class="article_author">'.$fila['author'].'</span>';

		                    $list .= '<span class="article_date">'.cambiarFormatoFechaHoraOriginal($fila['created_date']).'</span>';

		                    $list .= '<span class="article_read">'.obtenerTiempoLectura($fila['content']).' minutos de lectura</span>';

		                $list .= '</p></div>';

		            $list .= '</div>';

                $list .= '</div>';

                $list .= '<div class="bg-pages blogs" style="background-image: url(uploads/img_articles/'.$fila['image'].');"></div>';

            }  

            $list .= '</section>';

        }

        else

        {

            $list = '<script type="text/javascript">

                              window.location="error";

                              </script>';

        }

        $resultado->free();

        $respuesta = $list;

    }

    $mysql->close();

    return(print($respuesta));

}



function viewContentArticle($alias){

    $mysql = conexionMYSQL();

    

    $sql = "SELECT * FROM ws_blogs WHERE alias = '$alias'";

    if($resultado = $mysql->query($sql)){

        $list  = '<div class="m-container article_content">';

        $tags = Array();

        while($fila = $resultado->fetch_assoc())

        {

            

            $tags = explode(",", $fila['tags']);

            $totalTags = count($tags);

            $list .= $fila['content'];

            // REEMPLAZAR TAGS POR ENLACES

            //$list .= my_replace_keywords($fila['content']);

        }

        $list .= '<div class="tags_article"><p>TAGS ></p> ';

        for ($i=0; $i < $totalTags; $i++) {

            $list .= '<span>'.trim($tags[$i]," ").'</span>';

        }   

        $list .= '</div>';

        $list .= '<div class="sharethis-inline-share-buttons"></div>';

        $list .= '</div>';

        $resultado->free();

        $respuesta = $list;

    }

    $mysql->close();

    return(print($respuesta));

}





// ARTICLES RELATEDS



function viewArticlesRelated($alias)

{

    $mysql = conexionMYSQL();

    $sql = "SELECT * FROM ws_blogs WHERE alias != '$alias' ORDER BY RAND () LIMIT 4";

    if($resultado = $mysql->query($sql))

    {

            $list = '<div class="columns-blog xl-container">';

            while($fila = $resultado->fetch_assoc())

            {

                

                $list .= '<div class="four_column-blog">';

                $list .= '<a href="articulo/'.$fila['alias'].'" title="'.$fila['title'].'">';

                    $list .= '<div class="blog-box">';

                        $list .= '<div class="blog-img">';

                            $list .= '<div class="blog-img__bg" style="background-image:url(uploads/img_articles/'.$fila['image'].');"></div>';

                        $list .= '</div>';

                        $list .= '<div class="blog-box__details">';

                            $list .= '<h3 class="blog-box__title">'.$fila['title'].'</h3>';

                            $list .= '<p class="blog-box__date">'.cambiarFormatoFechaHoraOriginal($fila['created_date']).' - '.obtenerTiempoLectura($fila['content']).' minutos</p>';

                        $list .= '</div>';

                    $list .= '</div>';

                $list .= '</a>';

                $list .= '</div>';

    

            }

            $list .= '</div>';

            $resultado->free();

            $respuesta = $list;

    }

  

    $mysql->close();

    return(print($respuesta));



}



?>

