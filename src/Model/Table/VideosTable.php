<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use App\Model\Table\AppTable;
use Cake\Validation\Validator;

/**
 * Videos Model
 *
 * @method \App\Model\Entity\Video get($primaryKey, $options = [])
 * @method \App\Model\Entity\Video newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Video[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Video|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Video patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Video[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Video findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VideosTable extends AppTable
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

        $this->table('videos');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('youtubeId', 'create')
            ->notEmpty('youtubeId');

        $validator
            ->boolean('is_active')
            ->requirePresence('is_active', 'create')
            ->notEmpty('is_active');

        return $validator;
    }
}
