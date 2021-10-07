<?php
class Form_Validator {
    public $Rules = [];
    public $Errors = [];

    public function isNotEmpty($data){
        if(!empty($data)){
            echo 'yass!';
            return true;
        } else 
        {
            global $Errors;
            array_push($Errors,"There is an empty data");
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
        echo 'validatio!!';
        echo '<pre>';
        var_dump($post_array);
        echo '</pre>';

        echo $post_array['fio'];
        if(array_key_exists('fio', $this->Rules)){
            echo "exists\r\n";
            $callback = $this->Rules['fio'];
            $param = $post_array['fio'];
            echo $callback.' '.$param;
            $this->$callback($param);
        }
    }

    public function showErrors(){

    }
}