<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class BlogPostsController extends AppController {

	public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index']);

        return parent::beforeFilter($event);
    }

	public function index($tags = null) {
		$blogPosts = $this->BlogPosts->find('all')->where(['BlogPosts.is_active' => 1])->contain([
			'Images',
			'Tags'
		]);

		if (!empty($this->request->data)) {
			$tags = $this->request->data['Tags']['name'];
		}

		if ($tags) {
			// limit results to show only blogs with selected tags
			$blogPosts = $blogPosts->matching('Tags', function ($q) use ($tags) {
				return $q->where(['Tags.id IN' => $tags]);
			});
		}

		$blogPosts = $blogPosts->toArray();

		$this->_addPlaceholderImageIfEmpty($blogPosts);

		// find all tags for populating the checkboxes
		$this->loadModel('Tags');
		$tagsList = $this->Tags->find('list');

		$this->set('tags', $tagsList->toArray());
		$this->set('blogPosts', $blogPosts);
	}

	public function view($id = null) {
		if (!$id) {
			$this->redirect(array(
				'action' => 'index'
			));
		}

		$blogPost = $this->BlogPosts->get($id, array('contain' => 'Tags'));
		$this->set('blogPost', $blogPost->toArray());

	}

}