<?php
class CustomFormValidator extends Form_Validator{
    
    function __construct($form_field_names){
        parent::__construct($form_field_names);

    }

    public function isSet($data_to_check, $field_to_check){
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST[$field_to_check])){
                echo $field_to_check . 'Is set' . '<br>';
                return true;
            } else {
                array_push($this->Errors, "There is an unset $field_to_check field in form");
                return false;
            }
        }
    }
}