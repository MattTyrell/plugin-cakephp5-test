<?php
declare(strict_types=1);

namespace TsUserBToB\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \TsUserBtoB\Model\Entity\User newEmptyEntity()
 * @method \TsUserBtoB\Model\Entity\User newEntity(array $data, array $options = [])
 * @method array<\TsUserBtoB\Model\Entity\User> newEntities(array $data, array $options = [])
 * @method \TsUserBtoB\Model\Entity\User get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \TsUserBtoB\Model\Entity\User findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \TsUserBtoB\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\TsUserBtoB\Model\Entity\User> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \TsUserBtoB\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \TsUserBtoB\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\TsUserBtoB\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\TsUserBtoB\Model\Entity\User>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\TsUserBtoB\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\TsUserBtoB\Model\Entity\User> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\TsUserBtoB\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\TsUserBtoB\Model\Entity\User>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\TsUserBtoB\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\TsUserBtoB\Model\Entity\User> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('account')
            ->maxLength('account', 255)
            ->requirePresence('account', 'create')
            ->notEmptyString('account');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->boolean('is_default_password')
            ->allowEmptyString('is_default_password');

        $validator
            ->boolean('is_admin')
            ->allowEmptyString('is_admin');

        $validator
            ->scalar('role')
            ->maxLength('role', 255)
            ->allowEmptyString('role');

        $validator
            ->nonNegativeInteger('organisation_id')
            ->notEmptyString('organisation_id');

        $validator
            ->nonNegativeInteger('company_id')
            ->notEmptyString('company_id');

        $validator
            ->scalar('password_reset_token')
            ->maxLength('password_reset_token', 255)
            ->allowEmptyString('password_reset_token');

        $validator
            ->dateTime('token_expired_at')
            ->allowEmptyDateTime('token_expired_at');

        $validator
            ->nonNegativeInteger('created_by')
            ->allowEmptyString('created_by');

        $validator
            ->nonNegativeInteger('modified_by')
            ->allowEmptyString('modified_by');

        $validator
            ->dateTime('deleted')
            ->allowEmptyDateTime('deleted');

        $validator
            ->nonNegativeInteger('deleted_by')
            ->allowEmptyString('deleted_by');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);

        return $rules;
    }
}
