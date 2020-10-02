<?php  
/**
* Trigger this file on Plugin Deactivate
*
* @package AriadnaShopApi
*/

namespace Ariadna\Base;

class Deactivate
{
	public static function deactivate(){
		flush_rewrite_rules();
	}
}