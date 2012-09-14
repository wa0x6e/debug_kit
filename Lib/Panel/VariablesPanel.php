<?php
App::uses('DebugPanel', 'DebugKit.Lib');

/**
 * Variables Panel
 *
 * Provides debug information on the View variables.
 *
 * @package       cake.debug_kit.panels
 */
class VariablesPanel extends DebugPanel {

	public $priority = 1;

/**
 * beforeRender callback
 *
 * @return array
 */
	public function beforeRender(Controller $controller) {
		$var = array_merge($controller->viewVars, array('$request->data' => $controller->request->data));
		$this->title = __d('debug_kit', '<b>%d</b> vars', (count($var)-2));
		return $var;
	}

}
