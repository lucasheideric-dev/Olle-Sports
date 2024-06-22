<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Categoria Entity
 *
 * @property int $id
 * @property int $is_active
 * @property \Cake\I18n\FrozenTime $created
 * @property string $created_by
 * @property string $descricao
 *
 * @property \App\Model\Entity\Artigo[] $artigos
 */
class Categoria extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'is_active' => true,
        'created' => true,
        'created_by' => true,
        'descricao' => true,
        'artigos' => true,
    ];
}
