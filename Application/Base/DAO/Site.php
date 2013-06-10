<?php
	/*
		GrapeWEB II
	*/
	
	class Site {
		
		public function Get($key) {
			$config = R::load('site_config', 1);
			
			return $config->$key;
		}
		
	}
?>