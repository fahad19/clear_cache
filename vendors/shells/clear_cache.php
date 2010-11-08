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
 */
class ClearCacheShell extends Shell {
/**
 * Delete all cache files starting with 'cake_'
 *
 * Usage: ./cake clear_cache all
 */
    public function all() {
        $this->__delete();
        $this->out('Cleared!');
    }

    private function __delete($path = null) {
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
                $this->__delete($path . $dirItem . DS);
            } elseif (substr($dirItem, 0, 5) == 'cake_') {
                unlink($path . $dirItem);
            }
        }
    }

}
?>