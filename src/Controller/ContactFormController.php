<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

class ContactFormController extends AppController {
	
	public function email() {
		$name = $this->request->data['name'];
		$message = $this->request->data['message'];
		$email = $this->request->data['email'];

		if (empty($name) || empty($message) || empty($email)) {
			$this->Flash->set('Please fill in your name, email address and a message before submitting the form.', [
			    'element' => 'error'
			]);
			$this->redirect('/#mailto');
			return;
		}

		//Email::deliver('you@example.com', 'Subject', 'Message', ['from' => 'me@example.com']);

		$this->_send($email, $message, $name);

		$this->redirect('/');
	}

	protected function _send($email, $message, $name) {
		$email = new Email('default');
		$email->from([$email => $name])
		    ->to('joe_rushton@hotmail.co.uk')
		    ->subject('joerushton.com Contact Form')
		    ->send($message);
	}
}