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

		if ($categoryId) {
			$projects = $projects->matching('Categories', function ($q) use ($categoryId) {
				return $q->where(['Categories.id' => $categoryId]);
			});
			$this->set('currentCategory', $this->Projects->Categories->get($categoryId));
		}

		$projects = $projects->toArray();

		$this->set(compact('projects'));
	}

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