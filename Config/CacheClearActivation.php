<?php
/**
 * Plugin activation
 *
 * Description
 *
 * @package  Croogo
 * @author 
 */


class CakeClearActivation {


public function  __construct() {
        }
/**
 * onActivate will be called if this returns true
 *
 * @param  object $controller Controller
 * @return boolean
 */
        public function beforeActivation(&$controller) {

                      

                return true;
        }


        /**
         * Activation of plugin,
         * called only if beforeActivation return true
         *
         * @param object $controller
         * @return void
         */
        public function onActivation(&$controller) {
     
		$controller->Croogo->addAco('ClearCache');
		$controller->Croogo->addAco('ClearCache/admin_clear');
	
        }

        /**
         * Before onDeactivation
         *
         * @param object $controller
         * @return boolean
         */


        public function beforeDeactivation(&$controller) {
                return true;
        }


        /**
         * Deactivation of plugin,
         * called only if beforeActivation return true
         *
         * @param object $controller
         * @return void
         */
        public function onDeactivation(&$controller) {


                // remove accos
                $controller->Croogo->removeAco('ClearCache');

        }


}
?>