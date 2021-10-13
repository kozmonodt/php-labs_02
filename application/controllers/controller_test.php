<?php
class Controller_Test extends Controller{
    function __construct()
    {
        $this->model = new Model_Test;
        $this->view = new View;
    }
    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('test_view.php', 'template_view.php', $data);
    }
    function action_validateFirst(){
        echo 'ValidationFirst is in progress' . '<br>';
        //$data = $this->model->get_data();
        $this->model->validatorFirst->validate($_POST);
        $this->model->validator->showErrors();
    }
}