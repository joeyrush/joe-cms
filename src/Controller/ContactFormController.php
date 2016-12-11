<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;

class ContactFormController extends AppController {

	/**
     * Called before the controller action. You can use this method to configure and customize components
     * or perform logic that needs to happen before each controller action.
     *
     * @param \Cake\Event\Event $event An Event instance
     * @return \Cake\Network\Response|null
     * @link http://book.cakephp.org/3.0/en/controllers.html#request-life-cycle-callbacks
     */
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow();

        return parent::beforeFilter($event);
    }
	
	public function email() {
		$name = !empty($this->request->data['name']) ? $this->request->data['name'] : null;
		$message = !empty($this->request->data['message']) ? $this->request->data['message'] : null;
		$email = !empty($this->request->data['email']) ? $this->request->data['email'] : null;

		if (empty($name) || empty($message) || empty($email)) {
			$this->Flash->set('Please fill in your name, email address and a message before submitting the form.', [
			    'element' => 'error'
			]);
			$this->redirect('/#mailto');
			return;
		}

		//Email::deliver('you@example.com', 'Subject', 'Message', ['from' => 'me@example.com']);

		$result = $this->_send($email, $message, $name);

		if ($result) {
			$this->Flash->set('Thank you for your message! I\'ll be in touch as soon as I remember to look at my emails', [
			    'element' => 'success'
			]);
		} else {
			$this->Flash->set('Something went wrong, please try again.', [
			    'element' => 'error'
			]);
		}

		$this->redirect('/#mailto');
	}

	protected function _send($from, $message, $name) {
		$email = new Email('default');
		$email->from($from)
		    ->to('joe_rushton@hotmail.co.uk')
		    ->subject('joerushton.com Contact Form');
		
		return $email->send($message);
	}
}