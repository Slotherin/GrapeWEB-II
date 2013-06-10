<?php
	/*
		GrapeWEB II
	*/

	class View {
		
		// Public variables
		public $theme;
		
		// Private variables
		private $skeleton, $parameters = array();
		
		// Initiate view system and configure default variables
		public function __construct() {
			global $Grape;
			
			$this->theme = $Grape->Application->Config->Site->Theme;
			
			$this->Configure();	
		}
		
		// Configure the variables
		public function Configure() {
			global $Grape;
			
			$this->parameters['site->theme'] = $this->theme;
			$this->parameters['site->title'] = $Grape->Application->Config->Site->Title;
			$this->parameters['site->url'] = $Grape->Application->Config->Site->URL;

			if(Session::IsLogged()) {
				$this->parameters['user->name'] = 'Joshua';
				$this->parameters['user->credits'] = '69';
			}
		}
		
		// Set a new variable
		public function Set($key, $value) {
			$this->parameters[$key] = $value;
		}
		
		// Set the body (used in controller)
		public function Set_Body($view, $hk = false) {
            global $Grape;
            $skel_path = './Application/Themes/' . $this->theme . '/Views/skeleton.tpl';
			$page_path = './Application/Themes/' . $this->theme . '/Views/' . $view . '.tpl';

            if($hk == true) { 
            	$skel_path = './Application/Housekeeping/Views/Base/skeleton.tpl'; 

            	$page_path = './Application/Housekeeping/Views/' . $view . '.tpl';
           	}
			$this->skeleton = file_get_contents($skel_path);	
			$content = file_get_contents($page_path);
			$this->skeleton = str_replace('{$page->body}', $content, $this->skeleton);
		}
		
		// Publish the requested view and replace params
		public function Publish() {
			foreach($this->parameters as $key => $value) {
				$this->skeleton = str_replace('{$' . $key . '}', $value, $this->skeleton);
			}
			
			eval("?>" . $this->skeleton . "<?php ");
			return $this->skeleton;
			
		}
		
		// Return the requested view, used with {$call_view="view"} and set in the controller file
		public function Show_View($view, $hk = false) {
			$V = new View();

			if($hk == true) {
				$V->skeleton = file_get_contents('./Application/Housekeeping/Views/' . $view . '.tpl');
			} else {
				$V->skeleton = file_get_contents('./Application/Themes/' . $this->theme . '/Views/' . $view . '.tpl');
			}

			$V->Publish();
		}

	}

?>