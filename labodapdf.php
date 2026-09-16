<?php
require_once 'config/vista.php';
$page = 'Mi Boda';
require_once "header.php";?>
<!-- Flipbook StyleSheet -->
  <link href="https://sinopsisstudio.com/pdf-flipbook-main/lib/css/main.css" rel="stylesheet">
  <!-- Icons Stylesheet -->
  <link href="https://sinopsisstudio.com/pdf-flipbook-main/lib/css/themify-icons.min.css" rel="stylesheet">
  
  <script src="https://cdn.tailwindcss.com"></script>
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
        background-image: url('images/portfolio/gal-grid/boda/boda1.jpg');
        background-size: cover;
        margin-bottom: 50px !important;
    }
    .top-single-bkg{
        margin-bottom: 0px !important;
            height: 22vh !important;
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
  font-family: "Charm", cursive;
  font-weight: 400;
  font-style: normal;
}

.charm-bold {
  font-family: "Charm", cursive;
  font-weight: 700;
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
    float: left;
    right: 10px;
}
svg{
    margin-left: 17px !important;
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
  background:#1B2030 url(https://sinopsisstudio.com/images/pages/headboda.jpg) top center no-repeat;
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
    width: 60%;
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
                    <!--<h1 class="display-2 single-post-title"><?php //echo $page; ?></h1>-->
                    <!--<span class="post-subtitle charm-regular">Fotografía y video</span>-->
                </div>
            </div>
        </div>

         <div id="flipbookContainer">
  </div>

  <!-- jQuery  -->
  <script src="https://sinopsisstudio.com/pdf-flipbook-main/lib/js/libs/jquery.min.js" type="text/javascript"></script>
  <!-- Flipbook main Js file -->
  <script src="https://sinopsisstudio.com/pdf-flipbook-main/lib/js/flip.js" type="text/javascript"></script>
  <!-- Flipbook main Js file -->
  <script>

    function esDispositivoMovil() {
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;

    // Detecta dispositivos Android, iOS y otros móviles
    return /android|iphone|ipad|ipod|blackberry|windows phone|mobile/i.test(userAgent);
}

// Verifica si el dispositivo es móvil
if (esDispositivoMovil()) {
    //alert("Estás utilizando un dispositivo móvil.");
    var alto = 500;
} else {
   // console.log("No estás en un dispositivo móvil.");
    var alto =1000;
}
    jQuery(document).ready(function () {
      //uses source from online(make sure the file has CORS access enabled if used in cross-domain)
      // var pdf = 'https://mozilla.github.io/pdf.js/web/compressed.tracemonkey-pldi-09.pdf';
       var pdf = 'https://sinopsisstudio.com/pdf-flipbook-main/paquetes/hoja0-2.pdf';
      var options = {
        height:alto,
        duration: 700,
        backgroundColor: "#2F2D2F",
        soundEnable : true,
        // Enable touch support
        useTouch: true
      };
      var flipBook = $("#flipbookContainer").flipBook(pdf, options);
    });
  </script>
      

             <!-- SECTION 5 -->
            <div id="contacto" class="section-holder section-info  section-nomargin home-section-3-5" style="padding-bottom: 50px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="padding-lr200 alignc">
                                <div class="el-smalltitle">Contáctanos</div>
                                <h2 class="display-4 margin-b30">¿Necesitas capturar algún momento en especial?</h2>
                                <p>En Sinopsis Studio, contamos con el equipo y espacios necesarios para realizar tus sesiones fotográficas y capturar momentos mágicos para ti.</p>
                                <a href="https://wa.link/sinopsisstudio" target="_blank" class="read-more margin-t30">Contactanos</a>
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