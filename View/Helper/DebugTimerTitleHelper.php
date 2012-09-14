<?php
App::uses('DebugTimer', 'DebugKit.Lib');
App::uses('DebugMemory', 'DebugKit.Lib');

/**
 * Debug TimerHelper
 *
 * Tracks time and memory usage while rendering view.
 *
 * PHP versions 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org
 * @package       debug_kit
 * @since         DebugKit 2.1
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 **/
class DebugTimerTitleHelper extends Helper {

	public $helpers = array('Number');

	public function getTitle() {

		$peakMemory = DebugKitDebugger::getPeakMemoryUse();
		$requestTime = DebugTimer::requestTime();

		return __d('debug_kit', '<b>%dmb / %d</b> ms', $this->Number->toReadableSize($peakMemory), round($requestTime * 1000));
	}
}
