<img src="almacenamiento\eventos\banner-eventos.jpg" alt="" width="100%">

<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <div class="mt-2">
                <div class="row mt-2">
                    <div class="col-md-12 order-md-1">
                        <div class="p-2 bg-white text-center">

                            <h1 class="text-uppercase purple"><strong>Disfruta nuestros eventos<br> y promociones en familia</strong></h1>
                            <br>
                            <p>
                                En el centro comercial Solesta podrás disfrutar de diferentes atracciones
                                <br>
                                para toda la familia.
                                <br>
                                <br>
                                Contamos con las medidas necesarias para cuidar tu salud y la de tu familia
                                <br>
                                ya que contamos con espacios abiertos para minimizar los riesgos.
                            </p>

                            <div class="row my-gallery mt-3">
                                <div class="col-md-4 mb-2">
                                    <figure>
                                        <a href="<?php echo base_url()."almacenamiento/eventos/evento-01.jpg"; ?>" itemprop="contentUrl" data-size="1200x1200">
                                            <img class="img-fluid rounded" src="<?php echo base_url()."almacenamiento/eventos/evento-01.jpg"; ?>" alt="Evento 1">
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <figure>
                                        <a href="<?php echo base_url()."almacenamiento/eventos/evento-02.jpg"; ?>" itemprop="contentUrl" data-size="1200x1200">
                                            <img class="img-fluid rounded" src="<?php echo base_url()."almacenamiento/eventos/evento-02.jpg"; ?>" alt="Evento 2">
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <figure>
                                        <a href="<?php echo base_url()."almacenamiento/eventos/evento-03.jpg"; ?>" itemprop="contentUrl" data-size="1200x1200">
                                            <img class="img-fluid rounded" src="<?php echo base_url()."almacenamiento/eventos/evento-03.jpg"; ?>" alt="Evento 3">
                                        </a>
                                    </figure>
                                </div>
            
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
        It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader-active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                    <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>
</div>
