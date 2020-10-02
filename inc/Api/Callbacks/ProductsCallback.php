<?php  
/**
* Callbacks For Products
*
* @package AriadnaShopApi
*/

namespace Ariadna\Api\Callbacks;

use Ariadna\Base\BaseController;

class ProductsCallback extends BaseController 
{

  public $token;

  function __construct($token) {
    $this->token = $token;
  }

  public function getProducts(){

    
    $enpoint_products = esc_attr( get_option( 'endpoint_products' ) );
    $api_user = esc_attr( get_option( 'api_user' ) );
    $api_password = esc_attr( get_option( 'api_password' ) );
    $clean_pass = str_replace('&amp;', '&', $api_password);

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $enpoint_products,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_POSTFIELDS =>"{\"username\": \"".$api_user."\", \"password\": \"".$clean_pass."\"}",
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "Authorization: Bearer ".$this->token.""
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

  }


}