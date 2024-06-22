<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Artigo extends Entity
{
    protected $_accessible = [
        'is_active' => true,
        'created' => true,
        'created_by' => true,
        'titulo' => true,
        'slug' => true,
        'subtitulo' => true,
        'data_publicacao' => true,
        'paragrafo_1' => true,
        'caminho_foto_titulo' => true,
        'caminho_foto_conteudo' => true,
        'imagem_url' => true,
        'creditos_imagem' => true,
        'views' => true,
        'paragrafo_2' => true,
        'paragrafo_3' => true,
        'paragrafo_4' => true,
        'paragrafo_5' => true,
        'paragrafo_6' => true,
        'paragrafo_7' => true,
        'is_principal' => true,
        'categoria_id' => true,
        'tag_id' => true,
        'time_id' => true,
        'categoria' => true,
        'tags' => true,
    ];
}
