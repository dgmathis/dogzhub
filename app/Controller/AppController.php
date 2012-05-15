<?php
class AppController extends Controller {
 
    public $components = array(
        'Session',
        'Auth' => array(
            'loginAction' => array(
                'controller' => 'users',
                'action' => 'login'
            ),
            'loginRedirect' => array(
                'controller' => 'owners',
                'action' => 'profile'
            ),
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'index'
            ),
            'authError' => 'Did you really think you are allowed to see that?',
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'email')
                )
            )
        )
    );

    public function beforeFilter() {

    }
}
?>
