<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\Rule\IsUnique;

/**
 * Grants Model
 *
 * @property \App\Model\Table\ClientsTable|\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\PartnershipsTable|\Cake\ORM\Association\BelongsTo $Partnerships
 * @property \App\Model\Table\PaysTable|\Cake\ORM\Association\BelongsTo $Pays
 *
 * @method \App\Model\Entity\Grant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Grant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Grant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Grant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Grant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Grant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Grant findOrCreate($search, callable $callback = null, $options = [])
 */
class GrantsTable extends Table
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

        $this->setTable('grants');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
		 $this->addBehavior('CounterCache', [
            'Clients' => ['grant_counts']
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id'
        ]);
        $this->belongsTo('Partnerships', [
            'foreignKey' => 'partnership_id'
        ]);
        $this->belongsTo('Pays', [
            'foreignKey' => 'pay_id'
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
            ->scalar('receipt')
            ->notEmpty('receipt');

        $validator
            ->date('granted')
            ->notEmpty('granted');
            
        $validator
            ->notEmpty('client_id');

        $validator
            ->notEmpty('partnership_id');

        $validator
            ->notEmpty('pay_id');
            
        $validator
            ->integer('amount')
            ->notEmpty('amount');

        $validator
            ->scalar('note')
            ->allowEmpty('note');

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
    	$rules->add($rules->isUnique(['receipt'],'This value is already in useaaaa'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));
        $rules->add($rules->existsIn(['partnership_id'], 'Partnerships'));
        $rules->add($rules->existsIn(['pay_id'], 'Pays'));


		$rules->add($rules->isUnique(
		    ['client_id', 'client_id','partnership_id'],
		    'This Client has already Granted'
		));
        return $rules;
    }
}
