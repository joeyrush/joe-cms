<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class AppTable extends Table {

/**
 * Fetches a single record for the Table it's called on, working out whether to find by ID, Slug or name.
 * @param  $slug : INT = ID, string = slug or name depending on table schema
 * @param  $passedParams : array of ORM compatible params
 * @return Entity : results from find('all')
 */
	public function readForView($slug, $passedParams) {
		$params = array('conditions' => array());

		if (is_numeric($slug)) {
			// findById
			$params['conditions']['id'] = $slug;
		} elseif ($this->hasField('slug')) {
			// findBySlug
			$params['conditions']['slug'] = $slug;
		} else {
			// Default behaviour: title will be passed in with hyphens instead of spaces.
			// If there is a hyphen in the title, that is replaced with %7C which equals the | symbol.
			$params['conditions']['name'] = str_replace('|', '-', str_replace('-', ' ', $slug));
		}

		return $this->find('all', array_merge_recursive($params, $passedParams));
	}

}