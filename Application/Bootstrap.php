<?php
	/*
		GrapeWEB II
	*/
	
     // Search if a value starts with $needle
    function starts_with($haystack, $needle) {
        return !strncmp($haystack, $needle, strlen($needle));
    }

	include_once 'Application.php';
	
	$Grape = new StdClass();
	
	$Grape->Application = new Application();
?>