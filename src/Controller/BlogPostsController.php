<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Lib\TwitterWrapper;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\Utility\Hash;

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
		])->order('BlogPosts.created DESC');

		if (!empty($this->request->data)) {
			$tags = $this->request->data['Tags']['name'];
		}

		if ($tags) {
			// limit results to show only blogs with selected tags
			$blogPosts = $blogPosts->matching('Tags', function ($q) use ($tags) {
				return $q->where(['Tags.id IN' => $tags]);
			});
		}

		$blogPosts = $blogPosts->group('BlogPosts.id');
		$blogPosts = $blogPosts->toArray();

		$this->_addPlaceholderImageIfEmpty($blogPosts);

		// find all tags for populating the checkboxes
		$this->loadModel('Tags');
		$tagsList = $this->Tags->find()->select(['id', 'name'])->combine('id', 'name'); // could do find('list') instead

		$this->set('tags', $tagsList->toArray());
		$this->set('blogPosts', $blogPosts);

		$tweets = TwitterWrapper::getInstance()->getTweets([
			967502012794507269, // JSON datatype column with Eloquent
			966682093446156288, // A tiny "Gotcha"
			965695498991566848, // High order functions
			964885049991712773, // SEO bookmark
			963176068998946821, // withCount
			959057835639394305, // Controller refactor
			979047292509523968, // google calendar
			977967440893235201, // dropcolumns array syntax
		]);

		$this->set('tweets', $tweets);
	}

	public function view($slug = null) {
		$Model = $this->modelClass;
		if (!$slug) {
			$this->redirect(array(
				'action' => 'index'
			));
		}

		$blogPost = $this->BlogPosts->readForView($slug, array(
			'contain' => 'Tags'
		));

		if (empty($blogPost->toArray())) {
			throw new NotFoundException();
		}

		$this->set('blogPost', $blogPost->first()->toArray());
	}

}