<?php

namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends \App\Controller\AppController
{
  public function initialize()
  {
    parent::initialize();

    $this->viewBuilder()->setLayout('admin');

    $this->loadComponent('RequestHandler', [
      'enableBeforeRedirect' => false,
    ]);
    $this->loadComponent('Flash');

    //$this->loadComponent('Security');

    //! Sistema de Login
    $this->loadComponent('Auth', [
      'authenticate' => [
        'Form' => [
          'fields' => [
            'username' => 'username',
            'password' => 'password'
          ],
          'userModel' => 'Users'
        ]
      ],
      'loginAction' => [
        'controller' => 'Users',
        'action' => 'login'
      ],
      'loginRedirect' => [
        'controller' => 'Pages',
        'action' => 'display',
        'home'
      ],
      'logoutRedirect' => [
        'controller' => 'Users',
        'action' => 'login',
      ],
      'storage' => 'Session',
      'authorize' => 'Controller'
    ]);
  }


  public function isAuthorized($user)
  {
    return true;
  }

  //! Usuário faz login é capturado os dados do usuário e atribuito a váriavel $current_user
  public function beforeFilter(Event $event)
  {
    $current_user = $this->Auth->user();
    $this->set('current_user', $current_user);
  }
}
