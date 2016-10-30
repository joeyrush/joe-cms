<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ProjectsTable extends Table {

	public function initialize(array $config)
    {
        $this->belongsToMany('Categories');
        $this->hasMany('Images', array(
        	'foreignKey' => 'model_id',
        	'conditions' => array(
        		'Images.model = "Projects"'
        	)
        ));
    }
}