<?php
class ClearCacheController extends ClearCacheAppController {
	/**
	 * Delete all cache files starting with 'cake_'
	 *
	 */
	public function admin_clear() {
		$this->log(__d('clear_cache','Cache has been cleared.', true));
		$this->ClearCache->delete();
		$this->Session->setFlash(__d('clear_cache','Cache has been cleared.', true), 'default', array('class' => 'success'));
		$this->redirect('/admin');
	}
}

