<?php  
/**
* Callbacks Ariadna Api
*
* @package AriadnaShopApi
*/

namespace Ariadna\Shortcode\Callbacks;

use Ariadna\Base\BaseController;



class ShortcodeCallbacks extends BaseController
{

	public function productsBuild(){

		ob_start();

		return require_once("$this->plugin_path/inc/Templates/products.php");

		return ob_get_clean();

	}
	

}