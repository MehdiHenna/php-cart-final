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
		
		return count(self::get());
		
	}
	public function total(){
		$orders = self::get();
		$cartOrders = [];
		foreach ($orders as $order ) {
			array_push($cartOrders, $order->price);		
		}
			return array_sum($cartOrders);
	}
}