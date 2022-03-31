<img class="img-fluid" src="almacenamiento\promociones\banner-promociones.jpg" alt="">


<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- INICIA CONTENIDO  -->
            <?php $this->load->view('_templates/mensajes_alerta.tpl.php');?>
            <section id="">
                <form class="form">
                    <div class="form-body text-center mt-5">
                        <h1 class="text-bold-700 purple darken-3 mb-3"><strong>Promociones Solesta en las mejores tiendas</strong></h1>

                        <!--div class="row match-height">

                            <div class="col-md-3 col-6">
                                <div class="card no-border">
                                    <div class="card-content">
                                        <iframe width="100%" class="rounded" height="315" src="https://www.youtube.com/embed/oIFTFh9MioM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>

                        </div-->

                        <div class="row my-gallery match-height">
                            
                            <div class="col-md-3 col-6 mb-2">
                                <figure>
                                    <a href="<?php echo base_url(); ?>almacenamiento/locales/promo-01-1200x1200px-.jpg" itemprop="contentUrl" data-size="1200x1200">
                                        <img class="img-fluid rounded" src="<?php echo base_url(); ?>almacenamiento/locales/promo-01-1200x1200px-.jpg" alt="Promoción">
                                    </a>
                                </figure>
                            </div>

                            <div class="col-md-3 col-6 mb-2">
                                <figure>
                                    <a href="<?php echo base_url(); ?>almacenamiento/locales/promo-02-1200x1200px-.jpg" itemprop="contentUrl" data-size="1200x1200">
                                        <img class="img-fluid rounded" src="<?php echo base_url(); ?>almacenamiento/locales/promo-02-1200x1200px-.jpg" alt="Promoción">
                                    </a>
                                </figure>
                            </div>

                            <?php foreach ($promociones_list as $promocion_row) : ?>
                                <div class="col-md-3 col-6 mb-2">
                                    <figure>
                                        <a href="<?php echo base_url_locales().$promocion_row->local_url.'/'.$promocion_row->url; ?>" itemprop="contentUrl" data-size="1200x1200">
                                            <img class="img-fluid rounded" src="<?php echo base_url_locales().$promocion_row->local_url.'/'.$promocion_row->url; ?>" alt="<?php echo $promocion_row->alt; ?>">
                                        </a>
                                    </figure>
                                </div>
                            <?php endforeach; ?>

                        </div>

                        <!--div class="row match-height">
                            <div class="col-md-3 col-6">
                                <div class="card no-border">
                                    <div class="card-content">
                                        <img class="img-fluid rounded" src="<?php echo base_url(); ?>almacenamiento\locales\biancolatte\promocion-1.jpg" itemprop="" alt="Promocion Biancolatte"/>
                                    </div>
                                </div>
                            </div>
                        </div-->

                        
                     

                    </div>
                </form>
            </section>
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
