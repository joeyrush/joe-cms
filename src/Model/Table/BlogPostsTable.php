<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class BlogPostsTable extends Table {

	public function initialize(array $config)
    {
        $this->belongsToMany('Tags');
        $this->hasMany('Images', array(
        	'foreignKey' => 'model_id',
        	'conditions' => array(
        		'Images.model = "BlogPosts"'
        	)
        ));
    }
}