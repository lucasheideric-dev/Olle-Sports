<?php $artigo_ajax = $artigo->id; ?>

<?php if ($artigo->categoria_id == 7) : ?>
    <?= $artigo->paragrafo_1; ?>
<?php endif; ?>

<?php if ($artigo->categoria_id != 7) : ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 justify-content-center align-items-center d-flex">
                <div class="col-lg-8">
                    <div>
                        <h1 class="titulo-artigo mt-5 mb-3"><?= $artigo->titulo ?></h1>
                        <h5 class="subtitulo-artigo"><?= $artigo->subtitulo ?></h5>
                        <p class="data-publicacao"><?= $artigo->created->format('d/m/Y - H:i:s') ?></p>
                        <hr />
                        <br />
                    </div>

                    <div class="col-lg-10 d-flex justify-content-center align-items-center artigos">
                        <div>
                            <div class="div-artigo">
                                <?= $artigo->paragrafo_1 ?>
                            </div>
                            <br />
                            <img src="/img/<?= $artigo->caminho_foto_conteudo ?>" alt="<?= $artigo->creditos_imagem ?>" title="<?= $artigo->titulo ?>">
                            <p class="creditos-imagem"><?= $artigo->creditos_imagem ?></p>
                            <br />

                            <?php if (!empty($artigo->paragrafo_2)) : ?>
                                <div class="div-artigo"><?= $artigo->paragrafo_2 ?></div>
                                <br />
                            <?php endif; ?>

                            <?php if (!empty($artigo->paragrafo_3)) : ?>
                                <div class="div-artigo"><?= $artigo->paragrafo_3 ?></div>
                                <br />
                            <?php endif; ?>

                            <?php if (!empty($artigo->paragrafo_4)) : ?>
                                <div class="div-artigo"><?= $artigo->paragrafo_4 ?></div>
                                <br />
                            <?php endif; ?>

                            <?php if (!empty($artigo->paragrafo_5)) : ?>
                                <div class="div-artigo"><?= $artigo->paragrafo_5 ?></div>
                                <br />
                            <?php endif; ?>

                            <?php if (!empty($artigo->paragrafo_6)) : ?>
                                <div class="div-artigo"><?= $artigo->paragrafo_6 ?></div>
                                <br />
                            <?php endif; ?>

                            <?php if (!empty($artigo->paragrafo_7)) : ?>
                                <div class="div-artigo"><?= $artigo->paragrafo_7 ?></div>
                                <br />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>

            <!-- <div class="col-12 wow fadeIn" data-wow-delay="200ms">
                <div>
                    <script async="async" data-cfasync="false" src="//pl22086465.toprevenuegate.com/047833387a0b88c83a066eb25db8f8b0/invoke.js"></script>
                    <div id="container-047833387a0b88c83a066eb25db8f8b0"></div>
                    <script type='text/javascript' src='//pl22074834.toprevenuegate.com/c4/78/77/c478772cd2ac375dd49729e2f4dfc077.js'></script>
                </div>
            </div> -->

            <h3 class="mt-3">🚨 Veja outras nóticias</h3>
            <?php foreach ($outrosArtigos as $artigo) : ?>
                <div class="col-md-6 col-xl-3 mt-1 mb-5 wow fadeIn" data-wow-delay="200ms">
                    <a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'noticia', $artigo->slug]) ?>">
                        <article class="card card-style25 h-100">

                            <div class="blog-image">
                                <img src="/img/<?= $artigo->caminho_foto_titulo ?>" alt="<?= $artigo->creditos_imagem ?>" title="<?= $artigo->titulo ?>" class="card-img-top border-radius-4">
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

            <!-- Script 3 -->
            <!-- <script type='text/javascript' src='//pl22094993.toprevenuegate.com/bf/73/41/bf7341e44a9d43adce17b6664aa3f4bf.js'></script> -->

        </div>
    </div>
<?php endif; ?>

<script>
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: '/artigos/incrementViews',
            data: {
                article_id: <?php echo $artigo_ajax; ?>
            },
            success: function(response) {},
            error: function(err) {}
        });
    });
</script>