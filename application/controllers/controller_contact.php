<?php
class Controller_Contact extends Controller{
    function __construct()
    {
        $this->model = new Model_Contact;
        $this->view = new View;
    }
    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('contacts_view.php', 'template_view.php', $data);
    }
    function action_validate(){
        echo '!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!';
        $data = $this->model->get_data();
        $this->model->validate($_POST);
    }
}