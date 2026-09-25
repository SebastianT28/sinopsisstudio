<?php

require_once 'config/vista.php';

$page = 'Primeros Pasos';
$title = "Sesión de fotos primeros pasos | Sinopsis Studio";
$description = "Sesiones de fotos para bebés en sus primeros pasos capturando momentos únicos con iluminación profesional.";


require_once "header.php";?>

<style type="text/css">

    /*body{

        background-image: url('images/portfolio/gal-grid/boda/bgboda.jpg');

        background-size: contain;

        background-repeat: repeat-x, repeat-x;

background-position-y: -60px, 400px;

background-position-x: -150px, -270px;

    }*/

    .bg1{

        height: 400px;

        background-image: url('https://sinopsisstudio.com/images/pages/headpasos2.jpg');

        background-size: cover;

        margin-bottom: 50px !important;

    }

    .top-single-bkg{

        margin-bottom: 50px !important;

    }

    .divder img{

        float: right;

    }

    .tcolor{

        color:#000000 !important;

    }

    .unicode-list li {list-style: none; font-size: 16px; line-height: 16px; color:#635649 !important}

    .star:before           {content: "\2713"; font-weight: bold; font-size: 24px; color:#635649 !important}

    .tleft{

        margin-left: 10px;

    }

    .section-holder {

    margin-bottom: 0px !important;

    }

    .numgrande {

    font-size: 90px;

    line-height: 0px;

    font-weight: bold;

}

.ptop50{

    padding-top: 50px;

}

.engagement-regular {

  font-family: "Engagement", cursive;

  font-weight: 400;

  font-style: normal;

}

.charm-regular {

  font-family: "Oooh Baby", cursive;

  font-weight: 400;

  font-style: normal;

}



.charm-bold {

  font-family: "Oooh Baby", cursive;

  font-weight: 400;

  font-style: normal;

}

.post-subtitle {

    font-size: 28px !important;

    margin-top: -20px !important;

}

sub {

    font-size: 23px !important;

    float: left;

}

sup {

    font-size: 33px;

    top: 40px;

    right: 10px;

    float: left;

}

.priceleft{

    margin-left: 25px;

    line-height: 110px;

}

.image {

  animation-duration: 3s;

  animation-name: slidein;

}



@keyframes slidein {

  from {

    margin-left: 100%;

    

  }



  to {

    margin-left: 0%;

    

  }

}



.img11 {

transform: rotate(0deg);

border: 0.5em solid #f4f4f4;

box-shadow: 0.5em 0.5em 0.5em #ccc;



}



.img11:hover {

transform: rotate(10deg);

border: 0.5em solid #f4f4f4;

box-shadow: 0.5em 0.5em 0.5em #ccc;

}

.img1 {

transform: rotate(0deg);

border: 0.5em solid #f4f4f4;

box-shadow: 0.5em 0.5em 0.5em #ccc;



}

.img1:hover {

transform: rotate(-10deg);

border: 0.5em solid #f4f4f4;

box-shadow: 0.5em 0.5em 0.5em #ccc;

}

.prchico{

    float: right;

    font-size: 24px;

    font-weight: bold;

}

.header{

  position:relative;

  overflow:hidden;

  display:flex;

  flex-wrap: wrap;

  justify-content: center;

  align-items: flex-start;

  align-content: flex-start;

  min-height:400px;

  min-width:300px;

  color:#eee;

}

.header:after{

  content:"";

  width:100%;

  height:40%;

  position:absolute;

  bottom:0;

  left:0;

  z-index:-1;

 background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(27,32,48,1) 100%);

}

.header:before{

  content:"";

  width:100%;

  height:100%;

  position:absolute;

  top:0;

  left:0;

    -webkit-backface-visibility: hidden;

    -webkit-transform: translateZ(0) scale(1.0, 1.0);

    transform: translateZ(0);

  background:#1B2030 url(https://sinopsisstudio.com/images/pages/headpasos3.jpg) top center no-repeat;

  background-size:cover;

  background-attachment:fixed;

  animation: grow 30s  linear 10ms infinite;

  transition:all 0.2s ease-in-out;

  z-index:-2

}

@keyframes grow{

  0% { transform:scale(1)}

  60% { transform:scale(1.3)}

}

.divleft{

    float: left;

}

.tcenter{

    text-align: center;

}

.minicontainer{

    max-width: 900px;

}

.left1{

    float:left;

}

.lefttop2{

margin-top: 124px;

}

.mimg{

    width: 100%;

}



@media only screen and (max-width: 600px) {

 .lefttop2{

  margin-top:0px;

 }

 .lefttop5{

   margin-top:40px; 

 }

 .mimg{

    width: 100%;

}

.movilpad{

    margin-left: 15px;margin-right: 15px;

}

}

</style>

<!-- TOP HEADER IMAGE -->

        <div class="top-single-bkg topsinglepage">

            <div class="topsingleimg header"> </div>

            <div class="inner-desc">

                <div class="container">

                    <h1 class="display-2 single-post-title charm-bold"><?php echo $page; ?></h1>

                    <!--<span class="post-subtitle charm-boldx">Fotografía y video</span>-->

                </div>

            </div>

        </div>

        <!-- /TOP HEADER IMAGE -->

        <!-- WRAP CONTENT -->

        <div id="wrap-content" class="page-content page-holder custom-page-template page-full fullscreen-page clearfix">

            <!-- SECTION 1 -->

            <div id="aboutus-2-1" class="section-holder aboutus-2-1" style="padding-top: 20px;padding-bottom: 60px;">

                <!--<div class="container">

                <div class="row align-items-center">

                        <div class="col-lg-12 bg1" >

                    

                        </div>

                </div>

                </div>-->

                <div class="container  minicontainer">

                    <div class="row align-items-center">

                        <div class="col-lg-6 tcolor movilpad" >

                            <!--<div class="el-smalltitle">Estudio fotográfico</div>-->

                            <h2 class="display-5 margin-b30 tcolor charm-boldx">Mis primeros pasos</h2>

<ul class="unicode-list">



<li class="star"><span class="tleft">20 fotos digitales</span></li>

<li class="star"><span class="tleft">5 fotos impresas 10x15 cm</span></li>

<li class="star"><span class="tleft">Tomas variados</span></li>

<li class="star"><span class="tleft">1 fondo</span></li>



</ul>

<div class="col-lg-12 divder"><h2 class="price-title tcolor charm-boldx"><sub>Inversión</sub><sup>S/</sup><span class="priceleft">230.00</span> </h2></div>

                        </div>

                        

                        <!-- /col-lg-6 -->

                        <div class="col-lg-6" >

                            <img src="images/portfolio/gal-grid/pasos/bebe2.jpg" alt="" width="600" class="img1">

                            

                        </div>

                        <!-- /col-lg-6 -->

                    </div>

                    <!-- /row -->

                </div>

                <!-- /container -->

            </div>

            <!-- /SECTION 1 -->



            <!-- SECTION 2 -->

            <div id="aboutus-2-1" class="section-holder aboutus-2-1" style="background-color:#c9e6f8;padding-top: 60px;padding-bottom: 60px;">

                <div class="container">

                    <div class="row align-items-center">



                        <div class="col-lg-4" >

                            

                            <img src="images/portfolio/gal-grid/pasos/bebe3.jpg" alt="" width="600" class="img11">

                            

                        </div>

                        <div class="col-lg-8 tcolor ptop50 movilpad" >

                            <!--<div class="el-smalltitle">Estudio fotográfico</div>-->

                             <div class="col-lg-6 left1 lefttop5">

                            <span class="numgrande charm-boldx">01</span><br>

                            <h2 class="display-5 margin-b30 tcolor charm-boldx">Paquete</h2>



<br>

<ul class="unicode-list">



<li class="star"><span class="tleft">20 fotos digitales</span></li>

<li class="star"><span class="tleft">5 fotos impresas 10x15 cm</span></li>



</ul>

</div>

<div class="col-lg-6 left1 lefttop2">

<ul class="unicode-list">

<li class="star"><span class="tleft">Tomas variados</span></li>

<li class="star"><span class="tleft">1 fondo</span></li>

</ul> 

 <div class="col-lg-12 divder"><h2 class="price-title tcolor charm-boldx"><sub>Inversión</sub><sup>S/</sup><span class="priceleft">230.00</span> </h2></div>

                        </div>

 </div>                      

                        <!-- /col-lg-6 -->

                        

                        <!-- /col-lg-6 -->

                    </div>

                    <!-- /row -->

                </div>

                <!-- /container -->

            </div>

            <!-- /SECTION 2 -->



<!-- SECTION 2 -->

            <div id="aboutus-2-1" class="section-holder aboutus-2-1" style="padding-top: 30px;padding-bottom: 60px;">

                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-lg-12 tcolor ptop50 tcenter">

                            <!--<div class="el-smalltitle">Estudio fotográfico</div>-->

                            

                            <h2 class="display-5 margin-b30 tcolor charm-boldx"><span class="numgrande charm-boldx">02</span> Sinopsis Studio</h2>

                        </div>

                        <div class="col-lg-12" >

                        <div class="col-lg-4 divleft tcenter" >

                            <img src="images/portfolio/gal-grid/pasos/bebe6.jpg" alt="" width="90%" class="img1">

                        </div>

                         <div class="col-lg-4 divleft tcenter" >

                            <img src="images/portfolio/gal-grid/pasos/bebe4.jpg" alt="" width="90%" class="img11">

                        </div>

                         <div class="col-lg-4 divleft tcenter" >

                            <img src="images/portfolio/gal-grid/pasos/bebe5.jpg" alt="" width="90%" class="img1">

                        </div>

                        </div>

                    </div>

                </div>

                <div class="container minicontainer">

                    <div class="row align-items-center">

                       

                        <div class="col-lg-12 tcolor ptop50 movilpad">

                            <!--<div class="el-smalltitle">Estudio fotográfico</div>-->

                           

<div class="col-lg-7 divleft" >

    <h5>Tiempo:</h5><br>

<ul class="unicode-list">

<li class="star"><span class="tleft">60 Minutos </span></li>

</ul> 

<h5>Fotografía:</h5><br>

<ul class="unicode-list">

<li class="star"><span class="tleft">10 digitales </span></li>

<li class="star"><span class="tleft">7 impresas 10x 15 cm</span></li> 

<li class="star"><span class="tleft">1 impresas 30 x 45 cm</span></li>

</ul> 

</div>

<div class="col-lg-5 divleft" >

<h5>Utilería:</h5><br>

<ul class="unicode-list">

<li class="star"><span class="tleft">Globos Satinados,</span></li> 

<li class="star"><span class="tleft">edad en globos,</span></li>

<li class="star"><span class="tleft">tematizado</span></li>

<li class="star"><span class="tleft">Fotos individuales</span></li> 

</ul>

 <div class="col-lg-12 divder"><h2 class="price-title tcolor charm-boldx"><sub>Inversión</sub><sup>S/</sup><span class="priceleft">390.00</span> </h2></div>

</div>





                        </div>



                        <!-- /col-lg-6 -->

                        

                        <!-- /col-lg-6 -->

                    </div>

                    <!-- /row -->

                </div>

                <!-- /container -->

            </div>

            <!-- /SECTION 2 -->





            <!-- SECTION 2 -->

            <div id="aboutus-2-1" class="section-holder aboutus-2-1" style="background-color:#c9e6f8;padding-top: 60px;padding-bottom: 60px;">

                <div class="container">

                    <div class="row align-items-center">



                        <div class="col-lg-8" >

                            <img src="images/portfolio/gal-grid/pasos/bebe9.jpg" alt="" width="50%" class="img1 divleft">

                     

                            <img src="images/portfolio/gal-grid/pasos/bebe7.jpg" alt="" width="50%" class="img11 divleft">

                            <img src="images/portfolio/gal-grid/pasos/bebe8.jpg" alt="" width="50%" class="img1 divleft">

                            <img src="images/portfolio/gal-grid/pasos/bebe10.jpg" alt="" width="50%" class="img1 divleft">

                            

                            

                        </div>

                        <div class="col-lg-4 tcolor ptop50 movilpad" >

                            <!--<div class="el-smalltitle">Estudio fotográfico</div>-->

                            <span class="numgrande charm-boldx">03</span><br>

                            <h2 class="display-5 margin-b30 tcolor charm-boldx">Paquete</h2>





<h5>Fotografía:</h5><br>

<ul class="unicode-list">

<li class="star"><span class="tleft">20 fotos digitales</span></li> 

<li class="star"><span class="tleft">5 impresas 10x15 cm</span></li>

<li class="star"><span class="tleft">Tomas variadas</span></li>

<li class="star"><span class="tleft">1 fondo</span></li>



</ul> 

<h5>Video:</h5><br>

<ul class="unicode-list">

<li class="star"><span class="tleft">1 minuto</span></li>

<li class="star"><span class="tleft">a 1 minuto y medio musicalizado</span></li>

<li class="star"><span class="tleft">de la sesión fotográfica</span></li>



</ul>



 <div class="col-lg-12 divder"><h2 class="price-title tcolor charm-boldx"><sub>Inversión</sub><sup>S/</sup><span class="priceleft">380.00</span> </h2></div>

                        </div>

                       

                        <!-- /col-lg-6 -->

                        

                        <!-- /col-lg-6 -->

                    </div>

                    <!-- /row -->

                </div>

                <!-- /container -->

            </div>

            <!-- /SECTION 2 -->



            <!-- SECTION 2 -->

            <div id="aboutus-2-1" class="section-holder aboutus-2-1" style="padding-top: 30px;padding-bottom: 70px;">

                <div class="container">

                    <div class="row align-items-center ">



                       

                        <div class="col-lg-8 tcolor ptop50 movilpad" >

                            <!--<div class="el-smalltitle">Estudio fotográfico</div>-->

                         

 <div class="col-lg-6 divleft" >

       <span class="numgrande charm-boldx">04</span><br>

                            <h2 class="display-5 margin-b30 tcolor charm-boldx">Completo</h2>

                            <h5>Tiempo:</h5><br>

<ul class="unicode-list">

<li class="star"><span class="tleft">60 minutos</span></li>

</ul> 

<h5>Fotografía:</h5><br>

<ul class="unicode-list">

<li class="star"><span class="tleft">10 Digitales</span></li> 

<li class="star"><span class="tleft">7 impresas 10x 15 cm</span></li> 

<li class="star"><span class="tleft">1 impresas 30 x 45 cm</span></li> 

</ul> 

</div>

<div class="col-lg-6 divleft" >

                     <h5>Utileria:</h5><br>

<ul class="unicode-list">

<li class="star"><span class="tleft">Globos Satinados,</span></li>

<li class="star"><span class="tleft">edad en globos,</span></li>

<li class="star"><span class="tleft">tematizado,</span></li>

<li class="star"><span class="tleft">Fotos individuales </span></li>

</ul> 

 <div class="col-lg-12 divder"><h2 class="price-title tcolor charm-boldx"><sub>Inversión</sub><sup>S/</sup><span class="priceleft">490.00</span> </h2></div>

 </div>

                        </div>

                       

                        <!-- /col-lg-6 -->

                         <div class="col-lg-4 ptop50" >

                           

<img src="images/portfolio/gal-grid/pasos/bebe8.jpg" alt=""  class="img1 left1 mimg">

  <img src="images/portfolio/gal-grid/pasos/bebe10.jpg" alt=""  class="img11 left1 mimg">



                        

           

                            

  </div>                          

                            

                        

                        <!-- /col-lg-6 -->

                    </div>

                    <!-- /row -->

                </div>

                <!-- /container -->

            </div>

            <!-- /SECTION 2 -->





<!-- SECTION 2 -->

            <div id="aboutus-2-1" class="section-holder aboutus-2-1" style="background-color:#c9e6f8;padding-top: 60px;padding-bottom: 60px;">

                <div class="container minicontainer">

                    <div class="row align-items-center">



                        <div class="col-lg-6" >

                            <!--<img src="images/portfolio/gal-grid/boda/boda10.jpg" alt="" width="600" class="img1"><br><br>-->

                            <img src="images/portfolio/gal-grid/pasos/bebe11.jpg" alt="" width="600" class="img11">

                            

                        </div>

                        <div class="col-lg-6 tcolor ptop50"><br>

                            <!--<div class="el-smalltitle">Estudio fotográfico</div>-->

                            <span class="display-5 charm-boldx">Adicionales</span><br><br><br>

                            

<ul class="unicode-list">

<li class="star"><span class="tleft">DRONE</span> <span class="prchico charm-boldx tcolor">S/ 280.00</span></li>

<li class="star"><span class="tleft">Cuadro Firmas 30x45 cm</span> <span class="prchico charm-boldx tcolor">S/ 120.00</span></li>

<li class="star"><span class="tleft">Cuadro Firmas 40x60 cm</span> <span class="prchico charm-boldx tcolor">S/ 150.00</span></li>

<li class="star"><span class="tleft">Lienzo de Huellitas</span> <span class="prchico charm-boldx tcolor">S/ 30.00</span></li>

<li class="star"><span class="tleft">Periódico de Boda</span>  <span class="prchico charm-boldx tcolor">S/ 30.00</span></li>

<li class="star"><span class="tleft">Photobook (20x20) 16p</span> <span class="prchico charm-boldx tcolor">S/ 140.00</span></li>

<li class="star"><span class="tleft">Photobook (25x19) 16p</span> <span class="prchico charm-boldx tcolor">S/ 180.00</span></li>

<li class="star"><span class="tleft">Photobook (20x20) 20p</span> <span class="prchico charm-boldx tcolor">S/ 250.00</span></li>

<li class="star"><span class="tleft">Photobook (25x19) 20p</span> <span class="prchico charm-boldx tcolor">S/ 300.00</span></li>

<li class="star"><span class="tleft">Album Pixar 10p</span> <span class="prchico charm-boldx tcolor">S/ 300.00</span></li>

<li class="star"><span class="tleft">Album Simpson 10p</span> <span class="prchico charm-boldx tcolor">S/ 300.00</span></li>

<li class="star"><span class="tleft">Invitación Digital Estandar</span> <span class="prchico charm-boldx tcolor">S/ 30.00</span></li>

<li class="star"><span class="tleft">Invitación Digital Premium</span> <span class="prchico charm-boldx tcolor">S/ 80.00</span></li>

<li class="star"><span class="tleft">Videoclip</span> <span class="prchico charm-boldx tcolor">S/ 250.00</span></li>

<li class="star"><span class="tleft">Hora Adicional</span> <span class="prchico charm-boldx tcolor">S/ 200.0</span></li>

</ul>



                        </div>

                       

                        <!-- /col-lg-6 -->

                        

                        <!-- /col-lg-6 -->

                    </div>

                    <!-- /row -->

                </div>

                <!-- /container -->

            </div>

            <!-- /SECTION 2 -->







 <!-- SECTION 2 -->

            <!--<div id="aboutus-2-1" class="section-holder aboutus-2-1" style="padding-top: 40px;padding-bottom: 40px;">

                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-lg-12" >

                            <img src="images/portfolio/gal-grid/boda/bannerboda.jpg" alt="" width="100%" ><br><br>

                        </div>

                    </div>-->

                    <!-- /row -->

                <!--</div>-->

                <!-- /container -->

           <!-- </div> -->

            <!-- /SECTION 2 -->





            



             <!-- SECTION 5 -->

            <!--<div id="contacto" class="section-holder aboutus-2-5" style="padding-top: 60px;">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="padding-lr200 alignc">

                                <div class="el-smalltitle">Contáctanos</div>

                                <h2 class="display-5 margin-b30">¿Buscas un fotógrafo / filmmaker?</h2>

                                <p>En Sinopsis Studio podemos ayudarte a capturar tus momentos mágicos</p>

                                <a href="contact.html" class="read-more margin-t30">Contáctanos</a>

                            </div>

                        </div>-->

                        <!-- /col-lg-12 -->

                   <!--</div>-->

                    <!-- /row -->

               <!-- </div>-->

                <!-- /container -->

            <!--</div>-->

            <!-- /SECTION 5 --> 



             <!-- SECTION 5 -->

            <div id="contacto" class="section-holder section-info  section-nomargin home-section-3-5" style="padding-bottom: 50px;">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="padding-lr200 alignc">

                                <div class="el-smalltitle">Contáctanos</div>

                                <h2 class="display-4 margin-b30">¿Necesitas capturar algún momento en especial?</h2>

                                <p>En Sinopsis Studio, contamos con el equipo y espacios necesarios para realizar tus sesiones fotográficas y capturar momentos mágicos para ti.</p>

                                <a href="https://wa.me/51941221847?text=Hola%2C%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios" target="_blank" class="read-more margin-t30">Contactanos</a>

                            </div>

                        </div>

                        <!-- /col-lg-12 -->

                    </div>

                    <!-- /row -->

                </div>

                <!-- /container -->

            </div>

            <!-- /SECTION 5 -->    

        </div>

        <!-- /WRAP CONTENT -->

        



<?php require_once "footer.php";?>



    </body>

</html>
