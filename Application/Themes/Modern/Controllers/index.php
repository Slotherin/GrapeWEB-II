<?php
	/*
		GrapeWEB II
	*/

	class Index_Controller extends Controller {
		
		public function __construct() {		
			parent::__construct();	
		}
		
		// Default index page
		public function Execute() {
			$View = new View();
			
			$View->Set('page->title', 'Home');
			$View->Set_Body('index');
			
			$View->Publish();
		}
	}

?>