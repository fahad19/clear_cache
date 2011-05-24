<?php
class ClearCacheClearCache extends ClearCacheAppModel {
	var $name = 'ClearCacheClearCache';
	var $useTable = false;

	public function delete($path = null) {
		if (!$path) {
			$path = TMP . 'cache' . DS;
		}
		$dirItems = scandir($path);
		$ignore = array('.', '..');
		foreach ($dirItems AS $dirItem) {
			if (in_array($dirItem, $ignore)) {
				continue;
			}

			if (is_dir($path . $dirItem)) {
				$this->delete($path . $dirItem . DS);
			} elseif (substr($dirItem, 0, 5) == 'cake_') {
				unlink($path . $dirItem);
			}
		}
	}
}

