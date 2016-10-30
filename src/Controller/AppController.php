<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

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
        // find navbar menu items and pass to the view
        $pages = TableRegistry::get('Pages');
        $pages = $pages->find('all')->all()->toArray();
        $this->_setActivePage($pages);
        $this->set(compact('pages'));

        return parent::beforeFilter($event);
    }

    /**
     * Compares the url of each page and determines whether its the active one
     * @param $pages
     * @return $pages modified with active key of true or false
     */
    protected function _setActivePage($pages) {
        $currentUrl = $this->request->here;

        foreach ($pages as &$page) {
            // build url from page controller/action/pass fields
            if (!empty($page['pass'])) {
                $pageUrl = Router::url(array('controller' => $page['controller'], 'action' => $page['action'], $page['pass']));
            } else {
                $pageUrl = Router::url(array('controller' => $page['controller'], 'action' => $page['action']));
            }

            // compare page record url to current url and seemlessly set active to true or false
            if (strpos($currentUrl, $pageUrl) !== false) {
                $page['active'] = true;
            } else {
                $page['active'] = false;
            }
        }

        return $pages;
    }
}
