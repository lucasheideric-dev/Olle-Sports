<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artigo $artigo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $artigo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $artigo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Artigos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="artigos form large-9 medium-8 columns content">
    <?= $this->Form->create($artigo) ?>
    <fieldset>
        <legend><?= __('Edit Artigo') ?></legend>
        <?php
            echo $this->Form->control('is_active');
            echo $this->Form->control('created_by');
            echo $this->Form->control('titulo');
            echo $this->Form->control('subtitulo');
            echo $this->Form->control('data_publicacao');
            echo $this->Form->control('paragrafo_1');
            echo $this->Form->control('caminho_foto');
            echo $this->Form->control('creditos_imagem');
            echo $this->Form->control('paragrafo_2');
            echo $this->Form->control('paragrafo_3');
            echo $this->Form->control('paragrafo_4');
            echo $this->Form->control('paragrafo_5');
            echo $this->Form->control('paragrafo_6');
            echo $this->Form->control('paragrafo_7');
            echo $this->Form->control('categoria_id', ['options' => $categorias, 'empty' => true]);
            echo $this->Form->control('tag_id');
            echo $this->Form->control('time_id');
            echo $this->Form->control('tags._ids', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
