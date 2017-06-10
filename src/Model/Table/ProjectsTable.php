<?php
namespace App\Model\Table;

use App\Model\Table\AppTable;

class ProjectsTable extends AppTable {

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