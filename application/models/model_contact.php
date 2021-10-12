<?php


class Model_Contact extends Model{

    public $validator;

    function __construct()
    {
        parent::__construct();
        $this->validator = new Form_Validator(array('fio', 'email', 'telefon'));
        //$this->validator->setRule('fio','hui');
        $rules = array(
            'fio' => array('isNotEmpty','isFIO'),
            'email' => array('isNotEmpty', 'isEmail'),
            'telefon' => array('isNotEmpty', 'isTelNumber'),
        );
        echo "Hey bitches!";
        foreach($rules as $rule_key => $rules){
            foreach($rules as $rule){
                //echo $rule_key . "=>" . $rule ;
                $this->validator->setRule($rule_key,$rule);
            }
        }
    }
    public function get_data(){
        return $this;
    }

}