<?php

App::uses('ClearCachesAppController', 'ClearCaches.Controller');

class ClearCachesController extends ClearCachesAppController 
{
	public $uses = array('ClearCaches.ClearCache');

/**
 * Delete all cache files starting with 'croogo_'
 *
 */
	public function admin_clear() 
	{
		$this->ClearCache->delete();
		$this->Session->setFlash(__d('theme', 'Cache has been cleared.'), 'default', array('class' => 'success'));
		$this->redirect('/admin');
	}
}