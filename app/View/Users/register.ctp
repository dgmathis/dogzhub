
<?php 
    echo $this->Form->create('User', array('enctype' => 'multipart/form-data'));
    echo $this->Form->input('Owner.first_name', array('label' => 'First Name'));
    echo $this->Form->input('Owner.last_name', array('label' => 'Last Name'));
    echo $this->Form->input('Owner.city');
    echo $this->Form->input('Owner.state');
    echo $this->Form->input('Owner.zip', array('label' => 'Zip Code'));
    echo $this->Form->input('email');
    echo $this->Form->input('password');
    echo $this->Form->input('confirm_password', array('label' => 'Confirm Password', 'type' => 'password'));
    echo $this->Form->end('Register');
?>
