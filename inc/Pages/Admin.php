<?php  
/**
* Admin page
*
* @package AriadnaShopApi
*/

namespace Ariadna\Pages;

use \Ariadna\Api\SettingsApi;
use \Ariadna\Base\BaseController;
use \Ariadna\Api\Callbacks\AdminCallbacks;


class Admin extends BaseController
{

  public $settings;

  public $callbacks;


  public function register(){

    $this->settings = new SettingsApi();

    $this->callbacks = new AdminCallbacks();

    $this->setSettings();
    
    $this->setSections();
    
    $this->setFields();

    $this->settings->register();

    add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
  }

  public function add_admin_pages(){
    add_menu_page( 'Ariadna Api', 'Ariadna Shop Api', 'manage_options' ,'ariadna_api_conf', array( $this->callbacks, 'adminDashboard'), 'dashicons-cart', 110 );
  }


  public function setSettings(){

    $args = array(
      array(
            'option_group' => 'ariadna_options_group',
            'option_name' => 'endpoint',
            'callback' => array($this->callbacks,'ariadnaOptionsGroup')
      ),
      array(
            'option_group' => 'ariadna_options_group',
            'option_name' => 'endpoint_products',
            'callback' => array($this->callbacks,'ariadnaOptionsGroup')
      ),
      array(
            'option_group' => 'ariadna_options_group',
            'option_name' => 'api_user',
            'callback' => array($this->callbacks,'ariadnaOptionsGroup')
      ),
      array(
            'option_group' => 'ariadna_options_group',
            'option_name' => 'api_password',
            'callback' => array($this->callbacks,'ariadnaOptionsGroup')
      )
    );

    $this->settings->setSettings( $args );

  }


  public function setSections(){

    $args = array(
      array(
            'id' => 'ariadna_adm_index',
            'title' => 'Configuración general',
            'callback' => array($this->callbacks,'ariadnaAdminSection'),
            'page' => 'ariadna_api_conf'
      )
    );

    $this->settings->setSections( $args );

  }


  public function setFields(){

    $args = array(
      array(
            'id' => 'endpoint',
            'title' => 'Endpoint token',
            'callback' => array( $this->callbacks,'endpointUrl' ),
            'page' => 'ariadna_api_conf',
            'section' => 'ariadna_adm_index',
            'args' => array(
              'label_for' => 'endpoint',
              'class' => 'ms-field',
            )
      ),
      array(
            'id' => 'endpoint_products',
            'title' => 'Endpoint productos',
            'callback' => array( $this->callbacks,'endpointUrlproducts' ),
            'page' => 'ariadna_api_conf',
            'section' => 'ariadna_adm_index',
            'args' => array(
              'label_for' => 'endpoint_products',
              'class' => 'ms-field',
            )
      ),
      array(
            'id' => 'api_user',
            'title' => 'Api Key',
            'callback' => array( $this->callbacks,'apiUser' ),
            'page' => 'ariadna_api_conf',
            'section' => 'ariadna_adm_index',
            'args' => array(
              'label_for' => 'api_user',
              'class' => 'ms-field',
            )
      ),
      array(
            'id' => 'api_password',
            'title' => 'Api Password',
            'callback' => array( $this->callbacks,'apiPassword' ),
            'page' => 'ariadna_api_conf',
            'section' => 'ariadna_adm_index',
            'args' => array(
              'label_for' => 'api_password',
              'class' => 'ms-field',
            )
      )

    );

    $this->settings->setFields( $args );

  }



}

?>