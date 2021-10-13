<?php


class Model_Test extends Model{
    public $validatorFirst;
    public $validatorSecond;

    function __construct()
    {
        parent::__construct();
        $this -> validatorFirst = new CustomFormValidator(array('group', 'fio'));
        //$this->validator->setRule('fio','isNotEmpty');
        $rules = array(
            'group' => array('isSet'),
            'fio' => array('isNotEmpty', 'isFIO'),
        );
        foreach($rules as $rule_key => $rules){
            foreach($rules as $rule){
                //echo $rule_key . "=>" . $rule ;
                $this->validatorFirst->setRule($rule_key,$rule);
            }
        }
    }
    public function get_data(){
        return $this;
    }

}