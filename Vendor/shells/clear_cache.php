<?php
/**
 * ClearCache Shell
 *
 * Shell for deleting all cache files
 *
 * Copyright 2010, Fahad Ibnay Heylaal <contact@fahad19.com>
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @author Fahad Ibnay Heylaal <contact@fahad19.com>
 * @copyright Copyright 2010, Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link http://fahad19.com/blog/clear-cache-plugin-for-cakephp
 */
class ClearCacheShell extends Shell 
{
    public $uses = array('ClearCache.ClearCacheClearCache');
/**
 * Delete all cache files starting with 'cake_'
 *
 * Usage: ./cake clear_caches all
 */
    public function all() 
    {
        $this->ClearCacheClearCache->delete();
        $this->out('Cleared!');
    }
}
