<?php

class Post_Controller extends Controller {

	public function Index() {
		global $Grape;
		
		switch($_POST['process']) {
			case 'do_login':
				$this->Do_Login();
			break;
			case 'show_register':
				$this->Show_Register();
			break;
			case 'show_login':
				$this->Show_Login();
			break;
			case 'show_online':
				echo 17;
			break;
		}
	}
	
	public function Do_Login() {
		$form = new Form(array('username', 'password'));
		
		if($form->check()) {
		
			echo 'Error: ' . $form->field->username . '<br>' . $form->field->password;
		} else {
			echo 'Error: All fields are required';
		}
	}
	
	public function Show_Register() {
		$V = new View();
		
		$V->Show_View('register');
	}

	public function Show_Login() {
		$V = new View();
		
		$V->Show_View('login/index');
	}
}