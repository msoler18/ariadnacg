<?php  
/**
* Callbacks For Admin Pages
*
* @package AriadnaShopApi
*/

namespace Ariadna\Api\Callbacks;

use Ariadna\Base\BaseController;


class AdminCallbacks extends BaseController
{

  public $emptyFields = "";

	public function adminDashboard(){

		return require_once ("$this->plugin_path/inc/Templates/admin.php");

	}

	public function ariadnaOptionsGroup( $input ){

		return $input;

	}


	public function ariadnaAdminSection(){
		echo "Configuración plugin";
	}


	public function endpointUrl(){

		$value = esc_attr( get_option( 'endpoint' ) );
		echo '<input id="endpoint" type="text" class="regular-text" name="endpoint" value="' . $value . '" placeholder="Inserta el endpoint para retornar el token"><br><span class="ms-option-indications">'. $this->emptyFields .'</span>';

	}

	public function endpointUrlproducts(){

		$value = esc_attr( get_option( 'endpoint_products' ) );
		echo '<input id="endpoint_products" type="text" class="regular-text" name="endpoint_products" value="' . $value . '" placeholder="Inserta el endpoint para consumir los productos"><br><span class="ms-option-indications">'. $this->emptyFields .'</span>';

	}

	public function apiUser(){

		$value = esc_attr( get_option( 'api_user' ) );
		echo '<input id="api_user"  type="text" class="regular-text" name="api_user" value="' . $value . '" placeholder="Inserta el Usuario para consumir el Api"><br><span class="ms-option-indications">'. $this->emptyFields .'</span>';

	}

	public function apiPassword(){
	
		$value = esc_attr( get_option( 'api_password' ) );
		echo '<input type="password" id="api_password" type="text" class="regular-text" name="api_password" value="' . $value . '" placeholder="Inserta el password para consumir el Api"><br><span class="ms-option-indications">'. $this->emptyFields .'</span>';

	}
	
}