<?php
namespace App\Controller;

use App\Controller\AppController;

class ProjectsController extends AppController {

	public function index($categoryId = null) {
		// populate dropdown
		$projectCategories = $this->Projects->Categories->find('list')->toArray();
		$this->set('projectCategories', $projectCategories);

		// fetch all the data
		$projects = $this->Projects->find('all')->contain([
			'Images',
			'Categories'
		]);

		/*
		Even though we have $categoryId as a param - we aren't really using that for the time being
		as we override it if POST data is available. This way we don't have to do anything with the urls yet
		 */
		if (!empty($this->request->data['category'])) {
			$categoryId = $this->request->data['category'];
		}

		if ($categoryId) {
			// if we've got a category id either from params or POST then attach a condition on the fly to reduce the result set
			$projects = $projects->matching('Categories', function ($q) use ($categoryId) {
				return $q->where(['Categories.id' => $categoryId]);
			});
			$this->set('currentCategory', $this->Projects->Categories->get($categoryId));
		}

		$projects = $projects->toArray();

		$this->set(compact('projects'));
	}

	/**
	 * This method is triggered via AJAX when the Project category selector is changed
	 * @return void
	 */
	public function listAjax() {
	    //$this->request->onlyAllow('ajax');
	    if (!$this->request->is('post')) {
	    	return $this->redirect('/projects');
	    }

	    $categoryId = $this->request->data['categoryId'];
	    // fetch all the data
		$projects = $this->Projects->find('all')->contain([
			'Images',
			'Categories'
		]);

	    if (!empty($categoryId)) {
	    	$projects = $projects->matching('Categories', function ($q) use ($categoryId) {
				return $q->where(['Categories.id' => $categoryId]);
			});
			$this->set('currentAjaxCategory', $this->Projects->Categories->get($categoryId));
	    }

	    $ajaxProjects = $projects->toArray();

		$this->set('ajaxProjects', $ajaxProjects);
	    $this->viewClass = 'Ajax.Ajax'; // Only necessary without the Ajax component
	}
}