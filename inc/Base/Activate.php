<?php  
/**
* Trigger this file on Plugin Activate
*
* @package AriadnaShop
*/


namespace Ariadna\Base;

class Activate
{

	public static function activate(){
		flush_rewrite_rules();
	}


}