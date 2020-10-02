<?php 
/**
*
* @package AriadnaShopTest
/*
Plugin Name: Ariadna Shop Api
Plugin URI: http://en-stock.com/ariadnacg/
Description: Plugin for retreive and update products
Version:1.0.0
Author: msoler18
Author URI:https://github.com/msoler18/
Text Domain: ariadna
License:GPL2
*/

use Ariadna\Base\BaseController;

defined( 'ABSPATH' ) or die( 'You can\t retreive this folder...' );


if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ){
  require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}


function activate_ariadna_plugin(){
  Ariadna\Base\Activate::activate();
}
register_activation_hook('__FILE__','activate_ariadna_plugin');


function deactivate_ariadna_plugin(){
  Ariadna\Base\Deactivate::deactivate();
}
register_deactivation_hook('__FILE__','deactivate_ariadna_plugin');



if( class_exists( 'Ariadna\\Init' ) ){
  Ariadna\Init::register_services();
  Ariadna\Init::register_shortcodes();
}

$pg_instance = new BaseController();
include($pg_instance->plugin_path . 'inc/Templates/confirmation.php');

?>