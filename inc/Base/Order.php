<?php
/**
* Creation Order Ariadna
*
* @package AriadnaShopApi
*/

namespace Ariadna\Base;

class Order {
  // public function orderCreate($data) {
  //   //echo '<pre>';print_r($data);die('die');
  //   $value_array = array(
  //     'post_title'   => $data['post_title'],
  //     'post_type' => $data['post_type'],
  //     'post_author' => $data['post_author'],
  //     'post_status' => $data['post_status'],
  //     'meta_input'   => array(
  //       'current_user_email' => $data['current_user_email'],
  //       'package_current_date' => $data['package_current_date'],
  //       'package_expire_date' => $data['package_expire_date'],
  //       'order_status' => $data['order_status'],
  //       'package_name' => $data['package_name'],
  //       'package_amount' => $data['package_amount'],
  //       'package_user' => $data['package_user'],
  //       'reference_code' => $data['reference_code']
  //     )
  //   );
    
  //   wp_insert_post( $value_array, true ); 

  //   http_response_code(200);

  //   if(is_wp_error($post_id)) {
  //     return $post_id->get_error_message();
  //   }

  // }



  // public function reservationCreate( $data ) {
  //   //echo '<pre>';print_r($data);die('die');
  //   $is_month = $data['reservation_until'];
  //   if( $is_month == 'month'){
  //     $value_array = array(
  //       'post_title'   => 'Reservación por mes' . " " . $data['name'],
  //       'post_type' => $data['post_type'],
  //       'post_author' => $data['post_author'],
  //       'post_status' => $data['post_status'],
  //       'meta_input'   => array(
  //         'nombre' => $data['name'],
  //         'correo_electronico_' => $data['current_user_email'],
  //         'celular' => $data['phone'],
  //         'meses_reserva' => $data['reservation_from'],
  //         'id_room' => $data['id_room'],
  //         'id_host' => $data['id_host'],
  //         'id_guest' => $data['id_guest'],
  //         'total_agenda' => $data['total'],
  //         'reference_code' => $data['reference_code'],
  //         'date_of_purchase' => $data['date_of_purchase'],
  //         'total_price' => $data['total_price'], 
  //       )
  //     );
  //   } else {
  //     $value_array = array(
  //       'post_title'   => 'Reservación por día' . " " .$data['name'],
  //       'post_type' => $data['post_type'],
  //       'post_author' => $data['post_author'],
  //       'post_status' => $data['post_status'],
  //       'meta_input'   => array(
  //         'nombre' => $data['name'],
  //         'correo_electronico' => $data['current_user_email'],
  //         'telefono_movil_' => $data['phone'],
  //         'desde' => $data['reservation_from'],
  //         'hasta' => $data['reservation_until'],
  //         'id_room' => $data['id_room'],
  //         'id_host' => $data['id_host'],
  //         'id_guest' => $data['id_guest'],
  //         'total_agenda' => $data['total'],
  //         'reference_code' => $data['reference_code'],
  //         'date_of_purchase' => $data['date_of_purchase'], 
  //         'total_price' => $data['total_price'], 
  //       )
  //     );
  //   }

  //   wp_insert_post( $value_array, true ); 

  //   http_response_code(200);

  //   if(is_wp_error($post_id)) {
  //     return $post_id->get_error_message();
  //   }

  // }



  // public function orderExists( $order ){

  //     global $wpdb;
      
  //     $query = "SELECT ID
  //               FROM mcro_posts as p JOIN mcro_postmeta as pm ON p.ID = pm.post_id
  //               WHERE p.post_type = 'package_order' AND pm.meta_key = 'reference_code' AND pm.meta_value = ".$order.";";

  //     $searchOrder = $wpdb->get_results($query, OBJECT);          
  //     $order_exist = "";

  //     if ( $searchOrder ){

  //       $order_exist = true;

  //     } else {

  //       $order_exist = false;

  //     }

  //     return $order_exist;
  // } 


  // public function reservationExists( $order ){

  //     global $wpdb;
      
  //     $query = "SELECT ID
  //               FROM mcro_posts as p JOIN mcro_postmeta as pm ON p.ID = pm.post_id
  //               WHERE p.post_type = 'day_reservations' AND pm.meta_key = 'reference_code' AND pm.meta_value = ".$order.";";

  //     $searchOrder = $wpdb->get_results($query, OBJECT);          
  //     $order_exist = "";

  //     if ( $searchOrder ){

  //       $order_exist = true;

  //     } else {

  //       $order_exist = false;

  //     }

  //     return $order_exist;
  // } 


  // public function reservationMonthExists( $order ){

  //     global $wpdb;
      
  //     $query = "SELECT ID
  //               FROM mcro_posts as p JOIN mcro_postmeta as pm ON p.ID = pm.post_id
  //               WHERE p.post_type = 'monthly_reservations' AND pm.meta_key = 'reference_code' AND pm.meta_value = ".$order.";";

  //     $searchOrder = $wpdb->get_results($query, OBJECT);          
  //     $order_exist = "";

  //     if ( $searchOrder ){

  //       $order_exist = true;

  //     } else {

  //       $order_exist = false;

  //     }

  //     return $order_exist;
  // } 




}


?>