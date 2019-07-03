<?php	

namespace App;
use App\ShoppingCart;

class paypal{
	private $_apiContext;
	private $shopping_cart;
	private $_ClientId ='AamwO3zHagZUjl3Zaan-ZhiaB1TlLnfexFaM5hoKNwRakG8QqN7qGNgm7WgI029VFcIysmOaZEbKTqE1';
	private $_ClientSecret = 'EDDD1_sJm5vEQW7iA2GeRBQUVFqCGRwyqZktqSRKUbVpTa9VcZTKstefOECMZQW9nlkytkaVoRpXr_4H';

	public function __construct($shopping_cart){
		$this->_apiContext = \PaypalPayment::ApiContext($this->_ClientId, $this->_ClientSecret);

		$config = config("paypal_payment");
		$flatConfig = array_dot($config);
		
		$this->_apiContext->setConfig($flatConfig);

		$this->shopping_cart = $shopping_cart;
	}

	public function generate(){
		$payment = \PaypalPayment::payment()->setIntent("sale")
										->setPayer($this -> payer())
										->setTransactions([$this->transaction()])
										->setRedirectUrls($this->redirectURLs());
		try{
			$payment->create($this->_apiContext);
		}catch(\Exception $ex){
			dd($ex);
			exit(1);
		}
		return $payment;
	}
	public function payer (){
		return \PaypalPayment::payer()
							->setPaymentMethod("paypal");
	}

	public function redirectUrls(){
		$baseURL = url('url');
		return \PaypalPayment::redirectUrls()
							-> setReturnUrl("$baseURL/payments/store")
							-> setCancelUrl("$baseURL/carrito");
	}

	public function transaction(){
		return \PaypalPayment::transaction()
							->setAmount($this->amount())
							->setItemList($this->items())
							->setDescription("Tu compra en Ordenalo.com")
							->setInvoiceNumber(uniqid());
	}

	public function items (){
		$items=[];

		$products = $this->shopping_cart->products()->get();
		foreach ($products as $product) {
			array_push($items, $product->paypalItem());
		}

		return \PaypalPayment::itemList()->setItems($items);
	}

	public function amount(){
		return \PaypalPayment::amount()->setCurrency("USD")
							->setTotal($this->shopping_cart->total());
	}

}