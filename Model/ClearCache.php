<?php
class ClearCache extends ClearCacheAppModel {
	var $name = 'ClearCache';
	var $useTable = false;

	public function delete($path = null, $recursive = true) {
		if (!$path) {
			$path = TMP . 'cache' . DS;
		}
		$dirItems = scandir($path);

		$ignore = array('.', '..','empty');
		foreach ($dirItems AS $dirItem) {
			if (in_array($dirItem, $ignore)) {
				continue;
			}

			if (is_dir($path . $dirItem) && $recursive) {
				$this->delete($path . $dirItem . DS);

			} else {
				unlink($path . $dirItem);
			}
		}
	}
}

