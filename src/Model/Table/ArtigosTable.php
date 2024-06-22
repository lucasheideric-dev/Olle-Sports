<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ArtigosTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('artigos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categorias', [
            'foreignKey' => 'categoria_id',
        ]);
        $this->belongsTo('Tags', [
            'foreignKey' => 'tag_id',
        ]);
        $this->belongsTo('Times', [
            'foreignKey' => 'time_id',
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'artigo_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'tags_artigos',
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->notEmptyString('is_active');

        $validator
            ->scalar('created_by')
            ->maxLength('created_by', 160)
            ->requirePresence('created_by', 'create')
            ->notEmptyString('created_by');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 160)
            ->requirePresence('titulo', 'create')
            ->notEmptyString('titulo');

        $validator
            ->scalar('subtitulo')
            ->requirePresence('subtitulo', 'create')
            ->notEmptyString('subtitulo');

        $validator
            ->scalar('paragrafo_1')
            ->requirePresence('paragrafo_1', 'create')
            ->notEmptyString('paragrafo_1');

        $validator
            ->scalar('caminho_foto_titulo')
            ->maxLength('caminho_foto_titulo', 500)
            ->requirePresence('caminho_foto_titulo', 'create')
            ->notEmptyString('caminho_foto_titulo');

        $validator
            ->scalar('caminho_foto_conteudo')
            ->maxLength('caminho_foto_conteudo', 500)
            ->requirePresence('caminho_foto_conteudo', 'create')
            ->notEmptyString('caminho_foto_conteudo');

        $validator
            ->scalar('creditos_imagem')
            ->maxLength('creditos_imagem', 150)
            ->requirePresence('creditos_imagem', 'create')
            ->notEmptyFile('creditos_imagem');

        $validator
            ->scalar('paragrafo_2')
            ->allowEmptyString('paragrafo_2');

        $validator
            ->scalar('paragrafo_3')
            ->allowEmptyString('paragrafo_3');

        $validator
            ->scalar('paragrafo_4')
            ->allowEmptyString('paragrafo_4');

        $validator
            ->scalar('paragrafo_5')
            ->allowEmptyString('paragrafo_5');

        $validator
            ->scalar('paragrafo_6')
            ->allowEmptyString('paragrafo_6');

        $validator
            ->scalar('paragrafo_7')
            ->allowEmptyString('paragrafo_7');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'));
        $rules->add($rules->existsIn(['tag_id'], 'Tags'));
        $rules->add($rules->existsIn(['time_id'], 'Times'));

        return $rules;
    }
}
