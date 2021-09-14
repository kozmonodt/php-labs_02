<?php
class Controller_Interests extends Controller
{

	function action_index()
	{	
		$this->view->generate('interests_view.php', 'template_view.php');
	}
}