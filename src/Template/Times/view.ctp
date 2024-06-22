<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Time $time
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Time'), ['action' => 'edit', $time->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Time'), ['action' => 'delete', $time->id], ['confirm' => __('Are you sure you want to delete # {0}?', $time->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Times'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Time'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Artigos'), ['controller' => 'Artigos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artigo'), ['controller' => 'Artigos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="times view large-9 medium-8 columns content">
    <h3><?= h($time->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($time->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($time->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Artigos') ?></h4>
        <?php if (!empty($time->artigos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Is Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Subtitulo') ?></th>
                <th scope="col"><?= __('Data Publicacao') ?></th>
                <th scope="col"><?= __('Paragrafo 1') ?></th>
                <th scope="col"><?= __('Caminho Foto') ?></th>
                <th scope="col"><?= __('Creditos Imagem') ?></th>
                <th scope="col"><?= __('Paragrafo 2') ?></th>
                <th scope="col"><?= __('Paragrafo 3') ?></th>
                <th scope="col"><?= __('Paragrafo 4') ?></th>
                <th scope="col"><?= __('Paragrafo 5') ?></th>
                <th scope="col"><?= __('Paragrafo 6') ?></th>
                <th scope="col"><?= __('Paragrafo 7') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col"><?= __('Tag Id') ?></th>
                <th scope="col"><?= __('Time Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($time->artigos as $artigos): ?>
            <tr>
                <td><?= h($artigos->id) ?></td>
                <td><?= h($artigos->is_active) ?></td>
                <td><?= h($artigos->created) ?></td>
                <td><?= h($artigos->created_by) ?></td>
                <td><?= h($artigos->titulo) ?></td>
                <td><?= h($artigos->subtitulo) ?></td>
                <td><?= h($artigos->data_publicacao) ?></td>
                <td><?= h($artigos->paragrafo_1) ?></td>
                <td><?= h($artigos->caminho_foto) ?></td>
                <td><?= h($artigos->creditos_imagem) ?></td>
                <td><?= h($artigos->paragrafo_2) ?></td>
                <td><?= h($artigos->paragrafo_3) ?></td>
                <td><?= h($artigos->paragrafo_4) ?></td>
                <td><?= h($artigos->paragrafo_5) ?></td>
                <td><?= h($artigos->paragrafo_6) ?></td>
                <td><?= h($artigos->paragrafo_7) ?></td>
                <td><?= h($artigos->categoria_id) ?></td>
                <td><?= h($artigos->tag_id) ?></td>
                <td><?= h($artigos->time_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Artigos', 'action' => 'view', $artigos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Artigos', 'action' => 'edit', $artigos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Artigos', 'action' => 'delete', $artigos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artigos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
