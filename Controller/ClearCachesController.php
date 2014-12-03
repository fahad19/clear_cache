<?php

App::uses('ClearCachesAppController', 'ClearCaches.Controller');

class ClearCachesController extends ClearCachesAppController 
{
	public $uses = array('ClearCaches.ClearCache');

/**
 * Delete all cache files starting with the default prefix existing in app/config/croogo.php
 *
 */
	public function admin_clear() 
	{
		$this->ClearCache->delete();
		$this->Session->setFlash('Cache has been cleared.', 'default', array('class' => 'success'));
		$this->redirect('/admin');
	}
}