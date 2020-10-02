<?php 
/**
* Config Ariadna Api
*
* @package AriadnaShopApi
*/

namespace Ariadna\Base;

class Config
{

	public $url;
	public $ApiKey;
	public $merchantId;
	public $accountId;
	public $tax;
	public $responseUrl;
	public $confirmationUrl;
	public $confirmationEmail;

	public function __construct(){
		$this->url = esc_attr( get_option( 'url' ) );
		$this->ApiKey = esc_attr( get_option( 'api_key_payu' ) );
		$this->merchantId = esc_attr( get_option( 'merchant_id' ) );
		$this->accountId = esc_attr( get_option( 'account_id') );
		$this->tax = esc_attr( get_option( 'tax' ) );
		$this->responseUrl = esc_attr( get_option( 'responseUrl' ) );
		$this->confirmationUrl = esc_attr( get_option( 'confirmationUrl' ) );
		$this->confirmationEmail = esc_attr( get_option( 'conf_email') );
	}


}