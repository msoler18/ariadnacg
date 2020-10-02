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

  public function sync(){

    
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
    $parse_response = json_decode($response,true);

    curl_close($curl);
    
    $products_status = $this->createProducts($parse_response);

    echo $products_status;
  
  }

  public function createProducts($products) {

    $has_error = "";

    try {
      $has_error = "not";
      foreach($products["items"] as $product){
        if($product['status'] == 1 && $product['type_id'] == "simple"){
          if($this->product_exist($product['id'])) {
            $post_id = wp_update_post(array (
                'post_type' => 'productos',
                'post_title' => $product['name'],
                'meta_key'    => 'id_product',
                'meta_value'  => $product['id'],
            ));
          } else {
            $post_id = wp_insert_post(array (
                'post_type' => 'productos',
                'post_title' => $product['name'],
                'post_status' => 'publish',
                'comment_status' => 'closed',   
                'ping_status' => 'closed', 
            ));
          }

          $path = "http://desarrollomagento.ariadna.co/pub/media/catalog/product/";
          $image = $product['media_gallery_entries'][0]["file"];

          if ($post_id) {
              add_post_meta($post_id, 'id_product', $product['id']);
              add_post_meta($post_id, 'status', $product['status']);
              add_post_meta($post_id, 'name', $product['name']);
              add_post_meta($post_id, 'price', $product['price']);
              add_post_meta($post_id, 'type_id', $product['type_id']);
              add_post_meta($post_id, 'media_gallery_entries', $path . $image );
          }

        }
      };
    } catch(Exception $e) {
      echo 'Error to retreive products: ',  $e->getMessage(), "\n";
      $has_error = "yes";
    }
    
    return $has_error;    

  }


  public function product_exist($id) {

    $args = array(
    'post_type'   => 'productos',
    'meta_key'    => 'id_product',
    'meta_value'  => $id,
    );

    $products = get_posts($args);
    $exist = false;

    if( is_array($products) && sizeof($products) > 0 ){
      $exist = true;
    }

    return $exist;

  }


}