<main id="main" class="main">

    <div class="pagetitle">
        <h1>Artigos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Início</a></li>
                <li class="breadcrumb-item">Artigos</li>
                <li class="breadcrumb-item active">Lista</li>
            </ol>
        </nav>
    </div>

    <section class="section">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="min-height: 72vh;">

                        <div class="card-body pt-3" style="padding-top: 20px!important;">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><?= $this->Paginator->sort('created', ['label' => 'Data de Criação']) ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('titulo', ['label' => 'Titulo']) ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('subtitulo', ['label' => 'Sub-Titulo']) ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('slug', ['label' => 'Url Amigável']) ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('is_principal', ['label' => 'Principal']) ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('time_id', ['label' => 'Time']) ?></th>
                                            <th scope="col"><?= $this->Paginator->sort('categoria_id', ['label' => 'Categoria']) ?></th>
                                            <th scope="col" class="text-end"><?= __('Ações') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($artigos as $artigo) : ?>
                                            <tr>
                                                <td><?= $artigo->created ? $artigo->created->format('d/m/Y') : '' ?></td>
                                                <td><?= $artigo->titulo ?></td>
                                                <td><?= $artigo->subtitulo ?></td>
                                                <td><?= $artigo->slug ?></td>
                                                <td><?= $artigo->is_principal ? 'Sim' : 'Não' ?></td>
                                                <td><?= $artigo->time ? $artigo->time->descricao : '' ?></td>
                                                <td><?= $artigo->categoria ? $artigo->categoria->descricao : '' ?></td>
                                                <td class="text-end">
                                                    <a class="btn btn-secondary btn-sm" style="line-height: 0.5;" href="<?= $this->Url->build(['action' => 'editar', $artigo->id]); ?>">
                                                        <i style="color: white;" class="bi bi-pencil-fill"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>   
                            </div>

                            <?= $this->element('paginatoradmin'); ?>


                            <div class="text-center pt-3">
                                <a class="btn btn-secondary text-white" type="button" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'home']); ?>">
                                    Voltar
                                </a>
                                <a class="btn btn-primary text-white" type="button" href="<?= $this->Url->build(['action' => 'adicionar']); ?>">
                                    Cadastrar Produtos
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

</main>