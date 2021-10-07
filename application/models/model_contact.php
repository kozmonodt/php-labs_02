<?php


class Model_Contact extends Model{

    function __construct()
    {
        parent::__construct();
        $this->validator->setRule('fio','isNotEmpty');
    }
    public function get_data(){
        return $this;
    }

}