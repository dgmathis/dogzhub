<?php
class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('register', 'logout');
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                //$this->Session->write('user_data', $this->request->data);
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash('Invalid username or password, try again');
            }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function register() {
        if ($this->request->is('post')) {
            if($this->request->data['User']['confirm_password'] == $this->request->data['User']['password']){
                $this->User->create();
                if ($this->User->saveAll($this->request->data)) {
                    if($this->Auth->login()){
                        $this->Session->setFlash('The user has been saved and you were logged in.');
                        $this->redirect($this->Auth->redirect());
                    }
                    else{
                        $this->Session->setFlash('The user has been saved but you couldn\'t be logged in.  That\s strange.');
                    }
                } else {
                    $this->Session->setFlash('The user could not be saved. Please, try again.');
                }
            }
            else{
                $this->Session->setFlash('Passwords do not match');
            }
        }
    }
}
?>
