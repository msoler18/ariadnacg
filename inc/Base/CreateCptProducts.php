<?php  
/**
* Trigger this file on Plugin Activate
*
* @package AriadnaShop
*/


namespace Ariadna\Base;

class CreateCptProducts
{

  public function __construct()
  {
      add_action( 'init', array( $this, 'ariadna_products' ) );
  }

	public function ariadna_products() {
     register_post_type( 'productos',
         array(
             'labels' => array(
                 'name' => __( 'Productos' ),
                 'singular_name' => __( 'Producto' )
                 ),
         'public' => true,
         'has_archive' => true,
         'menu_icon' => 'dashicons-money-alt',
         'rewrite' => array( 'slug' => 'producto' )
         )
     );
 }


}