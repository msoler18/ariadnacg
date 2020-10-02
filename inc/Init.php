<?php  
/**
* Init 
*
* @package AriadnaShopApi
*/

namespace Ariadna;
use Ariadna\Shortcode\Shortcode;


final class Init
{

  public static function get_services(){
    return array(
      Pages\Admin::class,
      Base\Ajax::class,
      Base\CreateCptProducts::class,
      Base\SettingsLinks::class
    );
  }

  public static function register_services(){

    foreach(self::get_services() as $class){
      $service = self::instantiate( $class );
      if( method_exists( $service, 'register' ) ){
        $service->register();
      }
    }

  }

  public static function register_shortcodes(){

    $form = new Shortcode();

    $form->register('products');

  }


  private static function instantiate( $class ){
    $service = new $class;
    return $service;
  }


  


}

?>