<?php
	/*
		GrapeWEB II
		
		Explanation:
			This file routes the URL to the specific controller and method,
			it's used as an array
			
		Example:
			'account/settings' => 'account->page1',
			
			The above routes the URL of account/settings to the controller
			of account and the function of page1. Controller Methods are
			very flexible and can be used more than once
		
		Notes:
			The method cannot accept multiple paramaters, such as 'settings("page1")',
			this means you'll have to make multiple functions for each page
			
			This routing system also works with POST requests, however it doubles
			up as a GET too
	*/
	
	$routes = array(
		// Index & Registration
		'index' => 'index->execute',
        'register' => 'register->execute',
        
        // Home
        'home' => 'home->execute',
        'account/settings' => 'home->settings',
        
        // Community
        'community' => 'community->execute',
        'community/staff' => 'community->staff',
        'community/news' => 'community->news',
        'community/changelog' => 'community->changelog',
		
		// Housekeeping
		'housekeeping' => 'hk_index->execute',
		'housekeeping/home' => 'hk_index->in',
	);
?>