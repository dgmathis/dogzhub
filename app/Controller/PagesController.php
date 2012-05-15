<?php
class PagesController extends AppController {
    
    function beforeFilter() {
        $this->Auth->allow('index');
    }
    
    function index(){
        
    }
}
?>
