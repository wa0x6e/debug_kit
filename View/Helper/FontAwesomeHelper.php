<?php
/**
 * FontAwesome helper
 *
 * To convert a title to a fontawesome icon class
 *
 * PHP version 4 and 5
 *
 * Copyright (c) 2009, Andy Dawson
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) 2009, Andy Dawson
 * @link          www.ad7six.com
 * @package       debug_kit
 * @subpackage    debug_kit.views.helpers
 * @since         v 1.0 (22-Jun-2009)
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

/**
 * FontAwesome class
 *
 * @uses          AppHelper
 * @package       debug_kit
 * @subpackage    debug_kit.views.helpers
 */
class FontAwesomeHelper extends AppHelper {

	public function getTitle($title) {
		return '<i class="'.$this->__matches(strtolower($title)).'"></i>';
	}

	private function __matches($title) {
		switch ($title) {
			case 'history' : return 'icon-time'; break;
			case 'session' : return 'icon-user'; break;
			case 'request' : return 'icon-link'; break;
			case 'log' : return 'icon-file'; break;
			case 'include' : return 'icon-copy'; break;
			case 'environment' : return 'icon-cogs'; break;
			default : return 'icon-sign-blank';
		}
	}

}