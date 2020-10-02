<?php  
/**
* Settings Links Ariadna Api
*
* @package AriadnaShopApi
*/


namespace Ariadna\Base;

use Ariadna\Base\BaseController;


class SettingsLinks extends BaseController
{

  public function register(){
    add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
  }

  public function settings_link( $links ){
    $settings_link = '<a href="admin.php?page=ariadna_api_conf">Configuración</a>';
    array_push( $links, $settings_link );
    return $links;
  }

}