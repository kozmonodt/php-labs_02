<?php
	require 'application/models/validators/form_validator.php';
	require 'application/models/validators/custom_form_validation.php';
	require 'application/models/validators/results_verification.php';
	
	class Model
	{
		public $validator;//валидатор
		/*
			Модель обычно включает методы выборки данных, это могут быть:
				> методы нативных библиотек pgsql или mysql;
				> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
				> методы ORM;
				> методы для работы с NoSQL;
				> и др.
		*/

		function __construct()
		{
			$this->validator = new Form_Validator();
		}

		// метод выборки данных
		public function get_data()
		{
			// todo
		}
		// валидировать
		public function validate($post_data)
		{
			$this->validator->validate($post_data);
		}
	}