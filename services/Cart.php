<?php

class Cart {
	public static function get() {
		if(isset($_SESSION['cart'])){
			return json_decode($_SESSION['cart']);
		}else{
			return [];
		}
	}
	public static function add($product) {
		$cart = self::get();
		array_push($cart, $product);
		$_SESSION['cart']=json_encode($cart);
	}

	public function count(){
		
		$TotalPriceProduct = 0;
		return $TotalPriceProduct;
	}
	public function total(){
		$totalCase = 0;
		return $totalCase;
	}
}