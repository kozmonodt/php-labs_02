<?php
class Form_Validator {
    public $Rules = array(
        'fio' => array(
            'isNotEmpty',
            ''
        )
    );
    public $Errors = [];

    public function isNotEmpty($data){
        if(!empty($data)){
            echo 'yass!';
            return true;
        } else 
        {
            array_push($this->Errors,"There is an empty data");
            echo 'noo!';
            return false;
        }
    }
    
    public function isInteger($data){
        if(is_int($data)){
            return true;
        } else {
            array_push($Errors,"There is a non integer data here!");
            return false;
        }
    }

    public function isLess($data, $value){
        if(is_int($data)){
            if($data < $value){
                return true;
            } else {
                return false;
            }
        } else {
            array_push($Errors,"There is a non integer data here!");
            return false;
        }
    }

    public function isGreater($data, $value){
        if(is_int($data)){
            if($data > $value){
                return true;
            } else {
                return false;
            }
        } else {
            array_push($Errors,"There is a non integer data here!");
            return false;
        }
    }

    public function isEmail($data){
        if(filter_var($data, FILTER_VALIDATE_EMAIL)){
            return true;
        } else {
            array_push($Errors,"There is a non email field here!");
            return false;
        }
    }

    public function setRule($field_name, $validator_name){	
        //array_push($this->Rules, $field_name, $validator_name);
        $this->Rules[$field_name] = $validator_name;
    }

    public function validate($post_array){
        $form_fields_names = array('fio','telefon');
        echo 'validatio!!';
        echo '<pre>';
        var_dump($post_array);
        echo '</pre>';
        foreach($form_fields_names as $form_field) {
            if(array_key_exists($form_field, $post_array)){
                if(array_key_exists($form_field, $this->Rules)){
                    echo "exists in check list" . PHP_EOL;
                    //$callback = $this->Rules['fio'];
                    $field_data = $post_array[$form_field];
                    foreach($this->Rules[$form_field] as $callback){
                        echo $callback.' '.$field_data;
                        $this->$callback($field_data);
                    }  
                }
            } else {
                array_push($this->Errors,"There is no such a field in the form");
                echo 'no_field_error';
            }
        }
    }

    public function showErrors(){
        foreach($this->Errors as $error){
            echo $error;
        }
    }
}