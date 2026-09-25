<!-- FOOTER -->

        <!--div id="footer-instagram">

            <ul class="instagram-pics instagram-size-small">

                <li class=""><a href="https://www.instagram.com/p/DD91g2RtmLm/" target="_blank" class=""><img src="images/insta/insta-1.jpg" alt=""/></a></li>

                <li class=""><a href="https://www.instagram.com/p/DD91g2RtmLm/" target="_blank" class=""><img src="images/insta/insta-2.jpg" alt=""/></a></li>

                <li class=""><a href="https://www.instagram.com/p/DD91g2RtmLm/" target="_blank" class=""><img src="images/insta/insta-3.jpg" alt=""/></a></li>

                <li class=""><a href="https://www.instagram.com/p/DD91g2RtmLm/" target="_blank" class=""><img src="images/insta/insta-4.jpg" alt=""/></a></li>

                <li class=""><a href="https://www.instagram.com/p/DD91g2RtmLm/" target="_blank" class=""><img src="images/insta/insta-5.jpg" alt=""/></a></li>

                <li class=""><a href="https://www.instagram.com/p/DD91g2RtmLm/" target="_blank" class=""><img src="images/insta/insta-6.jpg" alt=""/></a></li>

                <li class=""><a href="https://www.instagram.com/p/DD91g2RtmLm/" target="_blank" class=""><img src="images/insta/insta-7.jpg" alt=""/></a></li>

                <li class=""><a href="https://www.instagram.com/p/DD91g2RtmLm/" target="_blank" class=""><img src="images/insta/insta-8.jpg" alt=""/></a></li>

            </ul>

            <p class="clear"><a href="https://www.instagram.com/p/DD91g2RtmLm/" rel="me" target="_blank" class="">¡Síguenos!</a></p>

        </div>-->

        <style>

            @media only screen and (max-width: 600px) {

                #fot .row>*{

                    width: 50% !important;

                    font-size: 12px;

                   

                }

                .lef{

                    float:left;

                }

                .container, .row > * {

    padding-left: 10px !important;

    padding-right: 10px !important;

}

.copyright {

    padding-top: 0px !important;

}

            }

        </style>

        <footer role="contentinfo">

            <div class="container">

                <div class="footer-widgets" id="fot">

                    <div class="row">

                        <div class="col-lg-3 col-sm-6">

                            <div class="foo-block">

                                <div class="widget_text widget widget-footer">

                                    <h5 class="widgettitle">Acerca de nosotros</h5>

                                    <div class="textwidget">

                                        <p>En Sinopsis Studio, capturamos momentos que trascienden el tiempo, transformando instantes cotidianos en recuerdos inolvidables.</p>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- /col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">

                            <div class="foo-block">

                                <div class="widget_text widget widget-footer">

                                    <h5 class="widgettitle">Contáctanos</h5>

                                    <ul class="footer-contact">

                                        <li><i class="fas fa-map-marker-alt"></i><span>Av. Emmel 129A, Yanahuara &mdash; Arequipa</span></li>

                                        <li><i class="fas fa-mobile-alt"></i><span>+51 941 221 847</span></li>

                                        <li><i class="fas fa-envelope lef"></i><span class="lef">informes@sinopsisstudio.com</span></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <!-- /col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">

                            <div class="foo-block">

                                <div class="widget_text widget widget-footer">

                                    <h5 class="widgettitle">Enlaces de interés</h5>

                                    <ul>

                                        <li><a href="servicios">Servicios</a></li>

                                        <li><a href="paquetes">Paquetes</a></li>

                                        <li><a href="sesiones">Portafolio</a></li>

                                        <li><a href="contacto">Contacto</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-3 col-sm-6">

                            <div class="foo-block foo-last">

                                <div class="widget widget-footer">

                                    <h5 class="widgettitle">Síguenos</h5>

                                    <ul>

                                        <li><a href="https://www.facebook.com/people/Sinopsis-Studio/61555981502738/" target="_blank">Facebook</a></li>

                                        <li><a href="https://wa.link/sinopsisstudio" target="_blank">Whatsapp</a></li>

                                        <li><a href="https://www.instagram.com/sinopsis.studio/" target="_blank">Instagram</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="copyright">

                    <div class="footer-copy"> <span class="footer-year">2024</span> &copy; Sinopsis Studio. Desarrollado por: <a href="https://sinopsismarketing.com/" target="_blank">Sinopsis Marketing</a></div>

                </div>

            </div>

        </footer>

        <!-- /FOOTER -->

        <div class="scrollup">

            <a class="scrolltop" href="#">

            <i class="fa fa-chevron-up"></i>

            </a>

        </div>

        <!-- JS --> 

        <script src='js/jquery.js' defer></script>

        <script src='js/jquery-migrate.min.js' defer></script>

        <script src='css/bootstrap/js/popper.min.js' defer></script>

        <script src='css/bootstrap/js/bootstrap.min.js' defer></script>

        <script src='js/jquery.easing.min.js' defer></script>

        <script src='js/swiper.js' defer></script>

        <script src='js/isotope.js' defer></script>

        <script src='js/simple-lightbox.js' defer></script>

        <!-- MAIN JS -->

        <script src='js/init.js' defer></script>

        <!-- PhotoSwipe Init para galerías de paquetes en todos los servicios -->
        <script type="module">
        import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5/dist/photoswipe-lightbox.esm.js';

        const lightbox = new PhotoSwipeLightbox({
            gallery: '.galeria',
            children: 'a',
            bgClickAction: 'close',
            pswpModule: () => import('https://unpkg.com/photoswipe@5/dist/photoswipe.esm.js')
        });

        lightbox.init();
        </script>