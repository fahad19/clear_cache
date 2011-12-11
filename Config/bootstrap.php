<?php

CroogoNav::add('extensions.children.clear_cache', array(
	'title' => 'Clear Cache',
	'url' => array(
		'plugin' => 'clear_cache',
		'controller' => 'clear_cache_clear_cache',
		'action' => 'clear',
		'admin' => true,
		)
	));
