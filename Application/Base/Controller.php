<?php
	/*
		GrapeWEB II
	*/

	class Controller {
		
		public function __construct() {
			global $Grape;
			
			R::setup("mysql:host={$Grape->Application->Config->Database->Hostname};dbname={$Grape->Application->Config->Database->Name}", $Grape->Application->Config->Database->Username, $Grape->Application->Config->Database->Password);
			
			R::setStrictTyping(false);
			
			if(Site::Get('maintenance') && $_GET['request'] != 'maintenance') {
				header('Location: ' . $Grape->Application->Config->Site->URL . '/maintenance');
			}
			
			if(Ban::Exists('value', $_SERVER['REMOTE_ADDR']) && $_GET['request'] != 'banned') {
				header('Location: ' . $Grape->Application->Config->Site->URL . '/banned');
			}
		}

	}
?>