<?php 
 /**
* 
*
* @package AriadnaShopApi
*
*/
  namespace Ariadna\Templates;
  use Ariadna\Base\Order;
  

//   session_start();  
  

//   $Order = new Order();

//   /* Get options from Admin */

//   function get_string_between($string, $start, $end){
//       $string = ' ' . $string;
//       $ini = strpos($string, $start);
//       if ($ini == 0) return '';
//       $ini += strlen($start);
//       $len = strpos($string, $end, $ini) - $ini;
//       return substr($string, $ini, $len);
//   }  

//   $ApiKeyPayu = esc_attr( get_option( 'api_key_payu' ) );
//   if($ApiKeyPayu == ""){
//     $ApiKeyPayu = "4Vj8eK4rloUd272L48hsrarnUA";
//   }
//   $merchantIdpayu = esc_attr( get_option( 'merchant_id' ) );
//   if($merchantIdpayu == ""){
//     $merchantIdpayu = 508029;
//   }
//   $referenceCode = $_REQUEST['reference_sale'];
//   $txtValue = $_REQUEST['value'];
//   $newValue = number_format($txtValue, 1, '.', '');
//   $currency = $_REQUEST['currency'];
//   $statePol = $_REQUEST['state_pol'];
//   $signatureRequest = $_REQUEST['sign'];
//   $state = 'Firma no concuerda';
//   $signature = "$ApiKeyPayu~$merchantIdpayu~$referenceCode~$newValue~$currency~$statePol";
//   $signatureMd5 = md5($signature);
//   $confirmationEmail = "msoler735@gmail.com";
//   $from_date = $_REQUEST['extra1'];
//   $until_date = $_REQUEST['extra2'];
//   $all_info = $_REQUEST['extra3'];
//   $buyerEmail = $_REQUEST['email_buyer'];
//   $title = $_REQUEST['description'];
//   $id_host = get_string_between($all_info, '[id_host]', '[/id_host]');
//   $id_room = get_string_between($all_info, '[id_room]', '[/id_room]');
//   $id_guest = get_string_between($all_info, '[id_guest]', '[/id_guest]');
//   $userData = get_user_meta($id_guest,'nickname',true);
//   $total = get_string_between($all_info, '[total]', '[/total]');
//   $totalpriceres = get_string_between($all_info, '[totalprice]', '[/totalprice]');
//   $total_res = number_format($totalpriceres, 1, '.', '')
//   $purchase_date = get_string_between($all_info, '[currentdate]', '[/currentdate]');
//   $phone = $_REQUEST['phone'];
//   $reservation_exist = "";
//   if( !empty($_REQUEST) && $until_date != 'month'){
//     $reservation_exist = $Order->reservationExists($referenceCode);
//   } elseif ( !empty($_REQUEST) && $until_date == 'month')  {
//     $reservation_exist = $Order->reservationMonthExists($referenceCode);
//   }
//   if( $signatureMd5 == $signatureRequest && $reservation_exist  == false ){
    
//     switch ($statePol) {
//         case 4:
//             /* Transacción aprobada  */            
//             if($until_date == 'month'){
//               $post["post_type"] = "monthly_reservations";
//             } else {
//               $post["post_type"] = "day_reservations";
//             }
//             $post['post_author']   = $id_guest;
//             $post["reference_code"] = $referenceCode;
//             $post["post_status"] = "publish";
//             $post["current_user_email"] = $buyerEmail;  
//             $post["reservation_from"] = $from_date; 
//             $post["reservation_until"] = $until_date; 
//             $post["id_host"] = $id_host;
//             $post["id_guest"] = $id_guest;
//             $post["id_room"] = $id_room;  
//             $post["phone"] = $phone;
//             $post['total'] = $newValue; 
//             $post['name'] = $userData; 
//             $post['date_of_purchase'] = $purchase_date;
//             $post['total_price'] = $total_res;


//             $Order->reservationCreate($post);
//             /*
//             $state = 'Firma ok';
//             $msg  = "<b>Estado:</b> $state <br>";
//             $msg .= "<b>Apikey:</b>$ApiKeyPayu - <b>merchantId:</b>$merchantIdpayu - <b>referenceCode:</b>$referenceCode - <b>newValue:</b>$newValue - <b>currency:</b>$currency - <b>statePol:</b>$statePol <br>";
//             $msg .= "<b>Firma MD5:</b> $signatureMd5 <br>";
//             $msg .= "<b>Firma request: $signatureRequest </b>";
//             $msg .= "<br><hr><br><b>json request<br>";
//             $msg .= json_encode($_REQUEST);
//             $headers  = 'MIME-Version: 1.0' . "\r\n"; // set mime version
//             $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; // set content-type as html
//             mail($confirmationEmail, 'Form', $msg,$headers);
//             echo "ok";
//             /*http_response_code(200);*/
//             break;
//         case 6:

//             break;
//         case 7:
//           /* Transacción pendiente */

//             break;
//         case 104:
//             $state = "Error";
//             break;
//         default:
//             $state=$_REQUEST['mensaje'];
//     }
//  }
  
?>