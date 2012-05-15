<?php 
    echo $this->Form->create('Owner');
    echo $this->Form->input('first_name', array('label' => 'First Name', 'value' => $owner['Owner']['first_name']));
    echo $this->Form->input('last_name', array('label' => 'Last Name', 'value' => $owner['Owner']['last_name']));
    echo $this->Form->input('city', array('value' => $owner['Owner']['city']));
    echo $this->Form->input('state', array('value' => $owner['Owner']['state']));
    echo $this->Form->input('zip', array('label' => 'Zip Code', 'value' => $owner['Owner']['zip']));
    echo $this->Form->end('Save');
?>