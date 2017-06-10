<?php

namespace App\Model\Table;

use App\Model\Table\AppTable;

class CategoriesTable extends AppTable {

	public function initialize(array $config) {
        $this->belongsToMany('Projects');
    }
}