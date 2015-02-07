<?php
	Croogo::hookAdminMenu('ClearCache');


CroogoNav::add('sidebar', 'settings', array(
	
	'weight' => 60,
	'children' => array(
		'site' => array(
			'title' => __d('croogo', 'Clear Cache'),
			'url' => array(
				'admin' => true,
				'plugin' => 'clear_cache',
				'controller' => 'clear_cache',
				'action' => 'admin_clear',
				
			),
			'weight' => 10,
		),

	),
));
