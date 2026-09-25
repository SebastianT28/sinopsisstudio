<?php

require_once("config/conexion.php");



$mysql = conexionMYSQL();

$cliente = $_POST['client'];

$inicio = $_POST['date'].' 00:00:00';

$fin = $_POST['date2'].' 23:59:59';



$sql   = ("SELECT news.id, news.headline, news.description, news.type, news.datenew, news.section, news.media from clients_news, news WHERE clients_news.client_id = $cliente AND news.id = clients_news.news_id AND news.datenew >= '$inicio' and news.datenew <= '$fin' ORDER BY news.id DESC");

        

if($resultado = $mysql->query($sql))

{   

    if(mysqli_num_rows($resultado) == 0)

    {

        $reporte = '<h2 style="text-align:center;">Reporte Mensual de noticias</h2>';

        $reporte .= '<table class="table table-hover progress-table text-center">';

        $reporte .= '<thead class="text-uppercase">';

            $reporte .= '<tr>';

                $reporte .= '<th scope="col">Noticia</th>';

            $reporte .= '</tr>';

        $reporte .= '</thead>';

        $reporte .= '<tbody>';

        $reporte .= '<tr>';

                $reporte .= '<th scope="row" colspan="4">NO HAY NOTICIAS AÚN</th>';

        $reporte .= '</tr>';

        $reporte .= '</tbody>';

    $reporte .= '</table>';

    $respuesta = $reporte;

    echo $respuesta;

    }

    else

    {

        $reporte  = '<div class="card mt-3">';

            $reporte .= '<div class="card-body">';

                //$reporte .= '<h4 class="header-title">Enviar email</h4>';

                $reporte .= '<form action="mail" method="post" name="frm_sendmail" id="frm_sendmail">';

                    $reporte .= '<div class="form-row">';

                        $reporte .= '<div class="col-md-6 mb-3">';

                            $reporte .= '<label>Enviar a</label>';

                            $reporte .= '<input type="text" required class="form-control" name="email" autocomplete="off" maxlength="1000">';

                            $reporte .= '<small>Separe los correos por comas y sin espacios</small>';

                        $reporte .= '</div>';

                        $reporte .= '<div class="col-md-6 mb-3">';

                            $reporte .= '<label>Asunto</label>';

                            $reporte .= '<input type="text" required class="form-control" name="asunto" autocomplete="off" maxlength="250">';

                        $reporte .= '</div>';

                    $reporte .= '</div>';



                    $reporte .= '<div class="form-group">';

                        $reporte .= '<label for="detalles">Contenido</label>';

                        $reporte .= '<textarea name="contenido" class="form-control" id="editor1" required autocomplete="off" rows="10" cols="80">

                        <img src="http://www.gomademascar.pe/static/img/logo.png" height="50" alt="">

                        <h3>Noticias Solicitadas:</h3>';

                        while ($fila = $resultado->fetch_assoc())

                        {

                            $reporte .= '<h2>'.$fila['headline'].' &mdash; <small>';

                            if($fila['type'] == 0)

                            {

                                $reporte .= 'Prensa Escrita';

                            }

                            else if($fila['type'] == 1)

                            {

                                $reporte .= 'Prensa Radia';

                            }

                            else

                            {

                                $reporte .= 'Prensa Televisiva';

                            }

                            $reporte .= '</small></h2>';

                            

                        }

                        $resultado->free();

                        $reporte .= '</textarea>';

                        $reporte .= '</div>';

                    $reporte .= '<input type="submit" class="btn btn-rounded btn-dark mt-4 pr-4 pl-4" value="Ingresar" name="btnAvisos">';

                $reporte .= '</form>';

            $reporte .= '</div>';

        $reporte .= '</div>';

    

    $respuesta = $reporte;

    print($respuesta);

    }

    

}

else

{

    echo 'No hay nada';

}



?>

