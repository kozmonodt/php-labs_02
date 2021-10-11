<?php


class Model_Contact extends Model{

    public $validator;

    function __construct()
    {
        parent::__construct();
        $this->validator = new Form_Validator(array('fio', 'email', 'telefon'));
        $this->validator->setRule('fio','hui');
    }
    public function get_data(){
        return $this;
    }

}