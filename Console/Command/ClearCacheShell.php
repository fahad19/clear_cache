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
class ClearCacheShell extends Shell {
    var $uses = array('ClearCache.ClearCache');
/**
 * Delete all cache files starting with 'cake_'
 *
 * Usage: ./cake clear_cache all
 */
    public function all() {
        $this->ClearCache->delete();
        $this->out(__d('clear_cache','Cleared!', true));
    }
}

