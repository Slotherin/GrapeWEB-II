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
			
			$View->Set('page->title', 'Home');
            
			$View->Set_Body('Housekeeping/index', true);
			
			$View->Publish();
		}
	}

?>