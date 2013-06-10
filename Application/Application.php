<?php
	/*
		GrapeWEB II
	*/

	class Application {
		
		// Public Variables
		public $url, $routes, $Config, $theme;
		
		// Initiate the entire CMS
		public function __construct() {
			global $Grape;
			
			$this->Load_Config();
			$this->Load_Libraries();
			$this->Load_External_Libraries();
			$this->Load_MVC();
			
			$this->theme = $this->Config->Site->Theme;

			if($_GET['request'] == '' || empty($_GET['request'])) {
				$this->url = 'index';
			} else {
				$this->url = $_GET['request'];
			}
			
		}
		
		// Route the user to the correct controller and method
		public function Route() {
			if(isset($this->routes[$this->url])) {
				$split = explode('->', $this->routes[$this->url]);
				$controller = $split[0];
				$method = $split[1];
				
				$path = 'Application/Themes/' . $this->theme . '/Controllers/' . $controller . '.php';

				if(starts_with($_SERVER['REQUEST_URI'], '/housekeeping')) {
                    $file_name = explode('hk_', $split[0]);
					$controller = 'Housekeeping/' . $file_name[1];

					$path = 'Application/Housekeeping/Controllers/' . $file_name[1] . '.php';
				}
				
				if(file_exists($path)) {
					include_once $path;
					
					$class_name = $split[0] . '_Controller';
					$ctrl = new $class_name;
					
					if(method_exists($class_name, $method)) {
						$ctrl->{$method}();
						die();
					} else {
						die('Method Error Related To: ' . $method);
					}
					
				} else {
					die('Controller Error Related To: ' . $controller);
				}
				
			} else {
				die('404');
			}
		}
		
		// Load and set config variables, aswell as the routes
		public function Load_Config() {
			foreach(glob('Config/*.php') as $File) {
				include_once $File;
			}

			include_once('Application/Themes/' . $config['Site']['Theme'] . '/Routes.php');
			
			$this->Config = new stdClass;
			$this->routes = $routes;

			foreach($config as $key => $value) {
				$this->Config->$key = null;

				foreach($config[$key] as $a => $b) {
					$this->Config->$key->$a = $b;
				} 
			}
		}
		
		// Load libraries
		public function Load_Libraries() {
			foreach(glob('Application/Libraries/*.php') as $File) {
				include_once $File;
			}
			
		}
		
		// Load external libraries
		public function Load_External_Libraries() {
			foreach(glob('Application/Libraries/External/*.php') as $File) {
				include_once $File;
			}
		}
		
		// Load MVC stuff and DAO's
		public function Load_MVC() {
			foreach(glob('Application/Base/*.php') as $File) {
				include_once $File;
			}
			
			foreach(glob('Application/Base/DAO/*.php') as $File) {
				include_once $File;
			}
		}
		
		// Send a user to a different page
		public function Send($page = null) {
			if($page == null) {
				header('Location: /');
			} else {
				header('Location: ' . $page);
			}
		}
		
	}
?>