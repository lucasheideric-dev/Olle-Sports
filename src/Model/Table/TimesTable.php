<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class TimesTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('times');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->hasMany('Artigos', [
            'foreignKey' => 'time_id',
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 100)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        return $validator;
    }
}
