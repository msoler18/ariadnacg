<?php  
/**
* Shortcodes
*
* @package AriadnaShopApi
*/

namespace Ariadna\Shortcode;
use \Ariadna\Shortcode\Callbacks\ShortcodeCallbacks;

class Shortcode
{

	public $callbacks;

	function register(string $section){

		$this->callbacks = new ShortcodeCallbacks();

		$functionReturn = $section . 'Build';

		add_shortcode( $section , array($this->callbacks, $functionReturn ) );

	}

}