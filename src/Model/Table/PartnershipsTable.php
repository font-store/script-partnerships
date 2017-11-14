<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Partnerships Model
 *
 * @property \App\Model\Table\FontsTable|\Cake\ORM\Association\BelongsTo $Fonts
 * @property \App\Model\Table\GrantsTable|\Cake\ORM\Association\HasMany $Grants
 *
 * @method \App\Model\Entity\Partnership get($primaryKey, $options = [])
 * @method \App\Model\Entity\Partnership newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Partnership[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Partnership|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Partnership patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Partnership[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Partnership findOrCreate($search, callable $callback = null, $options = [])
 */
class PartnershipsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('partnerships');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Fonts', [
            'foreignKey' => 'font_id'
        ]);
        $this->hasMany('Grants', [
            'foreignKey' => 'partnership_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('title')
            ->allowEmpty('title');

        $validator
            ->scalar('code')
            ->allowEmpty('code');

        $validator
            ->integer('grants_need')
            ->allowEmpty('grants_need');

        $validator
            ->integer('granted_counts')
            ->allowEmpty('granted_counts');

        $validator
            ->boolean('finished')
            ->allowEmpty('finished');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['font_id'], 'Fonts'));

        return $rules;
    }
}
