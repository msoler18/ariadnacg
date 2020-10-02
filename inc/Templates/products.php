<?php 
/**
* Products template
*
* @package AriadnaShopApi
*/

namespace Ariadna\Templates; 

$args = array(
  'post_type' => 'productos',
  'post_status' => 'publish'
);

$the_query = new \WP_Query( $args );

if ( $the_query->have_posts() ) : ?>
<div class="Products__Wrapper">
  <?php
  while ( $the_query->have_posts() ) : $the_query->the_post();
    $title = get_the_title();
    $image = get_field('image');
    $price = get_field('price'); ?>
    <div class="Products__Wrapper--single">
      <img src="<?php echo $image; ?>" alt="">
      <div class="Products__Single--footer">
        <h2><?php echo $title; ?></h2>
        <h3><?php echo $price; ?></h3>
      </div>
    </div>
  <?php endwhile;?>
  <a id="more_posts" href="#">Load More</a>
</div>  
<?php endif;

