<?php
class OwnersController extends AppController {

    public $uses = array('Owner');
    
    public function profile(){
        $id = $this->Session->read('Auth.User');
        $owner = $this->Owner->find('first', array('conditions' => array('Owner.user_id' => $id)));
        
        $this->set(compact('owner'));
    }
    
    public function edit(){
        $id = $this->Session->read('Auth.User');
        $owner = $this->Owner->find('first', array('conditions' => array('Owner.user_id' => $id)));
        
        if ($this->request->is('post')) {
            
            $this->Owner->id = $owner['Owner']['id'];
            
            if ($this->Owner->save($this->request->data)) {
                $owner = $this->Post;
                $this->Session->setFlash('Your owner information has been changed successfully.');
                $this->redirect(array('controller' => 'owners', 'action' => 'profile'));
            }
            else{
                $this->Session->setFlash('Your owner information could not be saved.');
            }
        }

        $this->set(compact('owner'));
    }
}
?>