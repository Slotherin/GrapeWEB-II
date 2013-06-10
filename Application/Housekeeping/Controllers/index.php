<?php
	/*
		GrapeWEB II
	*/

	class HK_Index_Controller extends Controller {
		
		public function __construct() {		
			parent::__construct();	
		}
		
		// Default index page
		public function Execute() {
			$View = new View();
			
			$View->Set('page->title', 'Login');
            $View->Set('body->class', 'login-layout');

			$View->Set_Body('Index/Login', true);
			
			$View->Publish();
		}

		// Logged In Page
		public function In() {
			$View = new View();

			$View->Set('page->title', 'Home');
			$View->Set('body->class', '');

			$View->Set_Body('Index/Home', true);

			$View->Publish();
		}
	}

?>