<?php

App::uses('ClearCachesAppModel', 'ClearCaches.Model');

class ClearCache extends ClearCachesAppModel 
{
	public $name = 'ClearCache';
	public $useTable = false;

	public function delete($path = null, $recursive = true) 
	{
		if (!$path) 
		{
			$path = TMP . 'cache' . DS;
		}

		$dirItems = scandir($path);
		$ignore = array('.', '..');
		$len_prefix = strlen(Configure::read('Cache.defaultPrefix'));

		foreach ($dirItems AS $dirItem) 
		{
			if (in_array($dirItem, $ignore)) 
			{
				continue;
			}

			if (is_dir($path . $dirItem) && $recursive) 
			{
				$this->delete($path . $dirItem . DS);
			}
			elseif (substr($dirItem, 0, $len_prefix) == Configure::read('Cache.defaultPrefix')) 
			{
				unlink($path . $dirItem);
			}
		}
	}
}