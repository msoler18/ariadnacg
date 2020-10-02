<?php 
 /**
* 
*
* @package AriadnaShopApi
*
*/
  namespace Ariadna\Templates;
  use Ariadna\Base\Order;
  

  // session_start();  
  

  // $Order = new Order();

  // /* Get options from Admin */
  // $ApiKeyPayu = esc_attr( get_option( 'api_key_payu' ) );
  // if($ApiKeyPayu == ""){
  //   $ApiKeyPayu = "4Vj8eK4rloUd272L48hsrarnUA";
  // }
  // $merchantIdpayu = esc_attr( get_option( 'merchant_id' ) );
  // if($merchantIdpayu == ""){
  //   $merchantIdpayu = 508029;
  // }
  // $referenceCode = $_REQUEST['reference_sale'];
  // $txtValue = $_REQUEST['value'];
  // $newValue = number_format($txtValue, 1, '.', '');
  // $currency = $_REQUEST['currency'];
  // $statePol = $_REQUEST['state_pol'];
  // $signatureRequest = $_REQUEST['sign'];
  // $state = 'Firma no concuerda';
  // $signature = "$ApiKeyPayu~$merchantIdpayu~$referenceCode~$newValue~$currency~$statePol";
  // $signatureMd5 = md5($signature);
  // $confirmationEmail = "msoler735@gmail.com";
  // $current_date = $_REQUEST['extra1'];
  // $due_date = $_REQUEST['extra2'];
  // $user_id = $_REQUEST['extra3'];
  // $buyerEmail = $_REQUEST['email_buyer'];
  // $title = $_REQUEST['description'];
  // $userData = get_user_meta($user_id,'nickname',true);
  // if( !empty($_REQUEST) ){
  //   $order_exist = $Order->orderExists($referenceCode);
  // }

  // if( $signatureMd5 == $signatureRequest && $order_exist == false ){
    
  //   switch ($statePol) {
  //       case 4:
  //           /* Transacción aprobada */            
  //           $post["post_title"] =  __('Orden', 'conline') . $title .' - ' . $current_date;  
  //           $post["package_name"] = $title; 
  //           $post["post_type"] = "package_order";
  //           $post['post_author']   = $user_id;
  //           $post["reference_code"] = $referenceCode;
  //           $post["post_status"] = "publish";
  //           $post["current_user_email"] = $buyerEmail;  
  //           $post["current_user_id"] = $user_id;  
  //           $post["currency"] = $currency; 
  //           $post["package_current_date"] = $current_date; 
  //           $post["package_expire_date"] = $due_date; 
  //           $post["package_amount"] = $txtValue;
  //           $post["package_user"] = $userData;
  //           $post["order_status"] = 1;  

  //           $Order->orderCreate($post);

  //           /** For debugger Request **/
  //           /*$state = 'Firma ok';
  //           $msg  = "<b>Estado:</b> $state <br>";
  //           $msg .= "<b>Apikey:</b>$ApiKeyPayu - <b>merchantId:</b>$merchantIdpayu - <b>referenceCode:</b>$referenceCode - <b>newValue:</b>$newValue - <b>currency:</b>$currency - <b>statePol:</b>$statePol <br>";
  //           $msg .= "<b>Firma MD5:</b> $signatureMd5 <br>";
  //           $msg .= "<b>Firma request: $signatureRequest </b>";
  //           $msg .= "<br><hr><br><b>json request<br>";
  //           $msg .= json_encode($_REQUEST);
  //           $headers  = 'MIME-Version: 1.0' . "\r\n"; // set mime version
  //           $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; // set content-type as html
  //           mail($confirmationEmail, 'Form', $msg,$headers);
  //           echo "ok";*/
  //           /*http_response_code(200);*/
  //           break;
  //       case 6:
  //           /* Transacción rechazada */
            
  //           $post["post_title"] =  __('Orden', 'conline') . $title .'-' . $current_date;  
  //           $post["package_name"] = $title; 
  //           $post["post_type"] = "package_order";
  //           $post['post_author']   = $user_id;
  //           $post["reference_code"] = $referenceCode;
  //           $post["post_status"] = "publish";
  //           $post["current_user_email"] = $buyerEmail;  
  //           $post["current_user_id"] = $user_id;  
  //           $post["currency"] = $currency; 
  //           $post["package_current_date"] = $current_date; 
  //           $post["package_expire_date"] = $due_date; 
  //           $post["package_amount"] = $txtValue;
  //           $post["package_user"] = $userData;
  //           $post["order_status"] = 2;  
                       
  //           $Order->orderCreate($post);

  //           break;
  //       case 7:
  //         /* Transacción pendiente */
  //           /*
  //           $post["post_title"] =  __('Orden', 'conline') . $title .'-' . $current_date;  
  //           $post["package_name"] = $title; 
  //           $post["post_type"] = "package_order";
  //           $post['post_author']   = $user_id;
  //           $post["reference_code"] = $referenceCode;
  //           $post["post_status"] = "publish";
  //           $post["current_user_email"] = $buyerEmail;  
  //           $post["current_user_id"] = $user_id;  
  //           $post["currency"] = $currency; 
  //           $post["package_current_date"] = $current_date; 
  //           $post["package_expire_date"] = $due_date; 
  //           $post["package_amount"] = $txtValue;
  //           $post["package_user"] = $userData;
  //           $post["order_status"] = 3;  
                       
  //           $Order->orderCreate($post);*/

  //           break;
  //       case 104:
  //           $state = "Error";
  //           break;
  //       default:
  //           $state=$_REQUEST['mensaje'];
  //   }
  // }
  
?>