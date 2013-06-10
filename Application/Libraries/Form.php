<?php
	/*
		GrapeWEB II
		
		Form class made by Leon
	*/
	
	class Form {
	
		// Public Variables
		public $fields = array(), $field;
		
		// Initiate Form
		public function __construct($fields) {
			$this->fields = $fields;
			$this->field = new StdClass();
		}
		
		// Initiate the form variables
		public function Initiate() {
			foreach($this->fields as $field) {
				$this->field->$field = $_POST[$field];
			}
		}
		
		// Checking if fields are set
		public function Check() {
			foreach($this->fields as $field) {
				if(empty($_POST[$field]) || !isset($_POST[$field])) {				
					return false;
				}
			}
			
			$this->Initiate();
						
			return true;
		}
	}
?>