<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use App\Model\Table\AppTable;
use Cake\Validation\Validator;

/**
 * BlogPosts Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Tags
 *
 * @method \App\Model\Entity\BlogPost get($primaryKey, $options = [])
 * @method \App\Model\Entity\BlogPost newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BlogPost[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BlogPost|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BlogPost patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BlogPost[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BlogPost findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ImagesTable extends AppTable
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

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'filename' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'filepath', // defaults to `dir`
                    'size' => 'size', // defaults to `size`
                    'type' => 'type', // defaults to `type`
                ],
                // A pathProcessor handles both returning the basepath
		        // as well as what the initial filename should be set to
		        'pathProcessor' => 'Josegonzalez\Upload\File\Path\DefaultProcessor',
		        // Allows you to create new files from the original source,
		        // or possibly even modify/remove the original source file
		        // from the upload process
		        'transformer' => 'Josegonzalez\Upload\File\Transformer\DefaultTransformer',
		        // Handles writing a file to disk... or S3... or Dropbox... or FTP... or /dev/null
		        'writer' => 'Josegonzalez\Upload\File\Writer\DefaultWriter',
		        'path' => 'webroot{DS}files{DS}{model}',
		        'nameCallback' => function(array $data, array $settings) {
		        	if (file_exists('files/Images/' . $data['name'])) {
		        		return str_replace(' ', '_', substr(microtime(), 5)) . '-' . $data['name'];
		        	} else {
		        		return $data['name'];
		        	}
		        }
            ],
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
        return $validator;
    }
}
