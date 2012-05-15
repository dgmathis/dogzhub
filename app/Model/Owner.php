<?php
class Owner extends AppModel {
    public $name = 'Owner';
    
    public $validate = array(
        'first_name' => array(
            'required' => array(
                'rule' => array('notEmpty', 'email'),
                'message' => 'A username is required'
            )
        ),
        'last_name' => array(
            'required' => array(
                'rule' => array('notEmpty', 'email'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        )
    );
    
    public function beforeSave() {
        if (isset($this->data['User']['password'])) {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        }
        return true;
    }
}
?>
