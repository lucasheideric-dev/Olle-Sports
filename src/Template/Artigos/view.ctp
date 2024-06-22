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
                        <?= $this->Html->image($artigo->caminho_foto_conteudo, ['alt' => $artigo->creditos_imagem]); ?>
                        <p class="creditos-imagem"><?= $artigo->creditos_imagem ?></p>
                        <br />

                        <?php if (!empty($artigo->paragrafo_2)) : ?>
                            <div class="div-artigo"><?= $artigo->paragrafo_2 ?></div>
                        <?php endif; ?>

                        <br />

                        <?php if (!empty($artigo->paragrafo_3)) : ?>
                            <div class="div-artigo"><?= $artigo->paragrafo_3 ?></div>
                        <?php endif; ?>

                        <br />

                        <?php if (!empty($artigo->paragrafo_4)) : ?>
                            <div class="div-artigo"><?= $artigo->paragrafo_4 ?></div>
                        <?php endif; ?>

                        <br />

                        <?php if (!empty($artigo->paragrafo_5)) : ?>
                            <div class="div-artigo"><?= $artigo->paragrafo_5 ?></div>
                        <?php endif; ?>

                        <br />

                        <?php if (!empty($artigo->paragrafo_6)) : ?>
                            <div class="div-artigo"><?= $artigo->paragrafo_6 ?></div>
                        <?php endif; ?>

                        <br />

                        <?php if (!empty($artigo->paragrafo_7)) : ?>
                            <div class="div-artigo"><?= $artigo->paragrafo_7 ?></div>
                        <?php endif; ?>

                        <br />
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>