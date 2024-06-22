<section class="bg-very-light-gray" style="padding-top: 30px;">
    <div class="container">

        <div class="row mt-n1-9">


            <h3 class="mt-5">🔥 Principais Noticias</h3>

            <?php foreach ($artigos_principal as $artigo) : ?>

                <?php $subtitulo = $artigo->subtitulo; ?>
                <?php if (strlen($artigo->subtitulo) > 110) {
                    $subtitulo = substr($subtitulo, 0, 110) . '...';
                } ?>

                <div class="col-md-6 col-xl-4 mt-1 wow fadeIn" data-wow-delay="200ms">
                    <a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'noticia', $artigo->slug]) ?>">
                        <article class="card card-style25 h-100">
                            <div class="blog-image">
                                <img src="img/<?= $artigo->caminho_foto_titulo ?>" alt="<?= $artigo->creditos_imagem ?>" title="<?= $artigo->titulo ?>">
                                <div class="date">
                                    <span class="text-white d-block"><?= $artigo->created->format('d/m/Y') ?></span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="h5 mb-4">
                                    <a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'noticia', $artigo->slug]) ?>"><?= $artigo->titulo ?></a>
                                </h4>
                                <p><?= $subtitulo ?></p>
                            </div>
                        </article>
                    </a>
                </div>
            <?php endforeach; ?>

            <h3 class="mt-5">🚨 Aconteceu no Futebol</h3>
            <?php foreach ($artigos as $artigo) : ?>
                <div class="col-md-6 col-xl-3 mt-1 wow fadeIn" data-wow-delay="200ms">
                    <a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'noticia', $artigo->slug]) ?>">
                        <article class="card card-style25 h-100">

                            <div class="blog-image">
                                <img src="img/<?= $artigo->caminho_foto_titulo ?>" alt="<?= $artigo->creditos_imagem ?>" title="<?= $artigo->titulo ?>" class="card-img-top border-radius-4">
                            </div>
                            <div class="card-body">
                                <h4 class="h5 mb-4">
                                    <a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'noticia', $artigo->slug]) ?>"><?= $artigo->titulo ?></a>
                                </h4>
                                <p><?= $artigo->subtitulo ?></p>
                            </div>
                        </article>
                    </a>
                </div>
            <?php endforeach; ?>

            <?= $this->element('paginator'); ?>


            <!-- <div class="col-12 wow fadeIn mt-5" data-wow-delay="200ms">
                <div>
                    <script async="async" data-cfasync="false" src="//pl22086465.toprevenuegate.com/047833387a0b88c83a066eb25db8f8b0/invoke.js"></script>
                    <div id="container-047833387a0b88c83a066eb25db8f8b0"></div>
                </div>
            </div> -->

        </div>
    </div>
</section>