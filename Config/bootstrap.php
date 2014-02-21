<?php
	CroogoNav::add('extensions.children.clear_cache', array(
	'icon' => array('trash', 'large'),
	'title' => __d('croogo', 'Clear Cache'),
	'url' => array(
		'plugin' => 'clear_caches',
		'admin' => true,
		'controller' => 'clear_caches',
		'action' => 'clear',
	),
	'weight' => 36
));