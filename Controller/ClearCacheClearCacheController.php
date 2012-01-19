<?php
class ClearCacheClearCacheController extends ClearCacheAppController {
	/**
	 * Delete all cache files starting with 'cake_'
	 *
	 */
	public function admin_clear() {
		$this->ClearCacheClearCache->delete();
		$this->Session->setFlash(__('Cache has been cleared.'), 'default', array('class' => 'success'));
		$referer = $this->referer();
		if (empty($referer)) {
			$referer = '/admin';
		}
		$this->redirect($referer);
	}
}

