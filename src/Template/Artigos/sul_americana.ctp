<section class="pt-0">
    <div class="container">
        <div class="row mt-4">
            <!-- blog left -->
            <div class="col-lg-7 mt-n2-9 mb-2-9 mb-lg-0">

                <div class="row g-0 mt-2-9">
                    <div class="card">
                        <div class="card-body">
                            <h5 style="padding: 0; margin: 0;">SUL-AMERICANA</h5>
                        </div>
                    </div>
                </div>

                <?php foreach ($artigos as $artigo) : ?>
                    <div class="row g-0 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 d-flex justify-content-center">
                                        <?= $this->Html->image($artigo->caminho_foto_titulo, ['style' => 'width: 100%;']); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="mt-3 mb-0"><a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'noticia', $artigo->slug]) ?>"><?= $artigo->titulo ?></a></h5>
                                        <br />
                                        <p class="card-text"><?= $artigo->subtitulo ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php if (count($artigos) === 0) : ?>
                    <div class="row g-0 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                        <div class="card">
                            <div class="card-body">
                                <h3>Esta categoria ainda não possui artigos, volte em breve.</h3>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?= $this->element('paginator'); ?>
            </div>
            <!-- end blog left -->

            <!-- blog right -->
            <div class="col-lg-5">
                <div class="blog-sidebar ps-lg-1-6 ps-xl-1-9">
                    <div class="widget wow fadeIn" data-wow-delay="800ms">
                        <h6 class="widget-title">Últimas Publicações</h6>
                        <div class="blog-post-carousel owl-carousel owl-theme">
                            <?php foreach ($artigos_recentes as $artigo) : ?>
                                <div>
                                    <div class="image-box">
                                        <?= $this->Html->image($artigo->caminho_foto_titulo); ?>
                                        <?php if (isset($artigo->categoria)) : ?>
                                            <h6><?= $artigo->categoria->descricao ?></h6>
                                        <?php endif; ?>
                                    </div>
                                    <div class="post-content">
                                        <a href="#!" class="display-30 mb-2 d-block text-muted"><?= $artigo->created->format('d/m/Y'); ?></a>
                                        <h6><a href="#!"><?= $artigo->titulo ?></a></h6>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- <div class="widget wow fadeIn" data-wow-delay="1200ms">
                        <h6 class="widget-title">Popular Tags</h6>
                        <ul class="blog-tags">
                            <li><a href="#!">Moving</a></li>
                            <li><a href="#!">Household</a></li>
                            <li><a href="#!">International</a></li>
                            <li><a href="#!">Relocation</a></li>
                            <li><a href="#!">Transport</a></li>
                            <li><a href="#!">Residential</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>