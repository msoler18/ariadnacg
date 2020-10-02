<?php  
/**
* Enqueue Script for Ariadna Api
*
* @package AriadnaShopApi
*/

namespace Ariadna\Base;

use Ariadna\Base\BaseController;
use Ariadna\Api\Callbacks\ConnectionCallback;

class Ajax extends BaseController
{
  
  function register(){
    add_action( 'init', array( $this, 'enqueue_ariadna_scripts' ) );
    add_action( 'wp_enqueue_scripts', array( $this, 'ariadna_styles') );
    add_action( 'wp_ajax_nopriv_retreive_products', array( $this, 'get_products' ) ); 
    add_action( 'wp_ajax_retreive_products', array( $this, 'get_products' ) );
  }

  function ariadna_styles() {
    wp_enqueue_style( 
      'ariadna', 
      $this->plugin_url . '/assets/css/app.css' 
    );
  }


  function enqueue_ariadna_scripts(){

    wp_register_script('appJs', $this->plugin_url . '/assets/js/app.js', array('jquery'), '1', true );
    wp_enqueue_script('appJs');

    wp_localize_script('appJs','ajax',['ajaxurl'=>admin_url('admin-ajax.php')]);

  }


  function get_products(){
    
    ConnectionCallback::apiConnection();

  }

}


?>