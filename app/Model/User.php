<?php
class User extends AppModel {
    public $name = 'User';
    public $hasOne = 'Owner';
    
    public $validate = array(
        'email' => array(
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
