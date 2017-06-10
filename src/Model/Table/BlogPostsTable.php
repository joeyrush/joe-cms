<?php
namespace App\Model\Table;

use App\Model\Table\AppTable;

class BlogPostsTable extends AppTable {

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