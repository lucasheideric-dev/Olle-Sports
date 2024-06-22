<main id="main" class="main">
    <div class="pagetitle">
        <h1>Artigos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Início</a></li>
                <li class="breadcrumb-item">Artigos</li>
                <li class="breadcrumb-item active">Adicionar</li>
            </ol>
        </nav>
    </div>

    <div class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <?= $this->Form->create($artigo, ['class' => 'row g-3', 'type' => 'file']) ?>

                        <div class="col-lg-1 mt-5">
                            <?= $this->Form->control('is_active', ['label' => ' Ativo?', 'class' => 'form-check-input mx-2', 'type' => 'checkbox']); ?>
                        </div>
                        <div class="col-lg-1 mt-5">
                            <?= $this->Form->control('is_principal', ['label' => ' Principal?', 'class' => 'form-check-input mx-2', 'type' => 'checkbox']); ?>
                        </div>

                        <div class="col-12">
                            <?= $this->Form->control('titulo', ['label' => 'Titulo *', 'class' => 'form-control', 'type' => 'text']); ?>
                        </div>

                        <div class="col-12">
                            <?= $this->Form->control('imagem_url', ['label' => 'URL da Foto *', 'class' => 'form-control', 'type' => 'text']); ?>
                        </div>

                        <div class="col-6">
                            <?= $this->Form->control('slug', ['label' => 'URL Amigável *', 'class' => 'form-control', 'type' => 'text']); ?>
                        </div>

                        <div class="col-3">
                            <?= $this->Form->control('time_id', ['label' => 'Time', 'class' => 'form-select', 'type' => 'select', 'options' => $times, 'empty' => 'Selecione']); ?>
                        </div>

                        <div class="col-3">
                            <?= $this->Form->control('categoria_id', ['label' => 'Categorias', 'class' => 'form-select', 'type' => 'select', 'options' => $categorias, 'empty' => 'Selecione']); ?>
                        </div>

                        <div class="col-12">
                            <?= $this->Form->control('subtitulo', ['label' => 'Sub-Texto *', 'class' => 'form-control', 'type' => 'text']); ?>
                        </div>

                        <div class="col-3">
                            <?= $this->Form->control('data_publicacao', ['label' => 'Data da Publicação', 'class' => 'form-control datepicker', 'type' => 'text', 'autocomplete' => 'off']); ?>
                        </div>

                        <div class="col-9">
                            <?= $this->Form->control('creditos_imagem', ['label' => 'Creditos da Imagem', 'class' => 'form-control', 'type' => 'text']); ?>
                        </div>

                        <div class="col-12">
                            <?= $this->Form->control('paragrafo_1', ['label' => '1º Parágrafo', 'class' => 'form-control', 'type' => 'textarea', 'style' => 'height: 70px;']); ?>
                        </div>

                        <div class="col-12">
                            <?= $this->Form->control('paragrafo_2', ['label' => '2º Parágrafo', 'class' => 'form-control', 'type' => 'textarea', 'style' => 'height: 70px;']); ?>
                        </div>

                        <div class="col-12">
                            <?= $this->Form->control('paragrafo_3', ['label' => '3º Parágrafo', 'class' => 'form-control', 'type' => 'textarea', 'style' => 'height: 70px;']); ?>
                        </div>

                        <div class="col-12">
                            <?= $this->Form->control('paragrafo_4', ['label' => '4º Parágrafo', 'class' => 'form-control', 'type' => 'textarea', 'style' => 'height: 70px;']); ?>
                        </div>

                        <div class="col-12">
                            <?= $this->Form->control('paragrafo_5', ['label' => '5º Parágrafo', 'class' => 'form-control', 'type' => 'textarea', 'style' => 'height: 70px;']); ?>
                        </div>

                        <div class="col-12">
                            <?= $this->Form->control('paragrafo_6', ['label' => '6º Parágrafo', 'class' => 'form-control', 'type' => 'textarea', 'style' => 'height: 70px;']); ?>
                        </div>

                        <div class="col-12">
                            <?= $this->Form->control('paragrafo_7', ['label' => '7º Parágrafo', 'class' => 'form-control', 'type' => 'textarea', 'style' => 'height: 70px;']); ?>
                        </div>

                        <div class="col-4">
                            <?= $this->Form->control('caminho_foto_titulo', ['label' => 'Imagem Titulo', 'class' => 'form-control', 'type' => 'file']); ?>
                        </div>

                        <div class="col-4">
                            <?= $this->Form->control('caminho_foto_conteudo', ['label' => 'Imagem Conteúdo', 'class' => 'form-control', 'type' => 'file']); ?>
                        </div>


                        <div class="text-center">
                            <a href="<?= $this->Url->build(['controller' => 'Marcas', 'action' => 'index']) ?>" class="btn btn-secondary">Voltar</a>
                            <?= $this->Form->button(__('Registrar'), ['class' => 'btn btn-primary']) ?>
                        </div>

                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>