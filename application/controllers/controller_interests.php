<?php
class Controller_Interests extends Controller
{
	function __construct()
	{
		$this->model = new Model_Interests();
		$this->view = new View(); 
	}
	function action_index()
	{	
		$data = $this->model->get_data();
		$this->view->generate('interests_view.php', 'template_view.php', $data);
	}
}