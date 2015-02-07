<?php
class ClearCacheController extends ClearCacheAppController {
	/**
	 * Delete all cache files starting with 'cake_'
	 *
	 */
	public function admin_clear() {
		$this->log("Cache Clear:");
		$this->ClearCache->delete();
		$this->Session->setFlash(__('Cache has been cleared.', true), 'default', array('class' => 'success'));
		$this->redirect('/admin');
	}
}

