<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 */
class ImagesController extends AppController {

	public function delete($id = null) {
		if (!$id) {
			$this->redirect($this->referer());
		}

		$image = $this->Images->get($id);

		// first delete the image file. strip "webroot\" from the start of the filepath string
		$filepath = substr($image['filepath'], 8) . $image['filename'];
		if (file_exists($filepath)) {
			unlink($filepath);
		}

		// then delete the image record
		if ($this->Images->delete($image)) {
			$this->Flash->set('Image was deleted succesfully!', ['element' => 'success']);
		} else {
			$this->Flash->set('There was a problem deleting the image.', ['element' => 'error']);
		}


		$this->redirect($this->referer());
	}
}