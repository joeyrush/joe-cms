<?php

namespace App\Controller;

use App\Controller\AppController;

class BlogPostsController extends AppController {

	public function index($tags = null) {
		$blogPosts = $this->BlogPosts->find('all')->where(['is_active' => 1])->contain([
			'Images',
			'Tags'
		]);

		if (!empty($this->request->data)) {
			debug($this->request->data);
		}

		if ($tags) {
			// limit results to show only blogs with selected tags
			$projects = $blogPosts->matching('Tags', function ($q) use ($tags) {
				return $q->where(['Tags.id' => $tags]);
			});
			$this->set('currentCategory', $this->Projects->Categories->get($categoryId));
		}

		$blogPosts = $blogPosts->toArray();

		// find all tags for populating the checkboxes
		$this->loadModel('Tags');
		$tags = $this->Tags->find('list');

		$this->set('tags', $tags->toArray());
		$this->set('blogPosts', $blogPosts);
	}

	public function view($id = null) {
		if (!$id) {

		}

	}

}