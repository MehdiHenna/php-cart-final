<?php $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui container">
	<h1 class="ui header">My Super Products</h1>
	<hr class="ui divider">
	<section class="ui three stackable cards">
		<!-- boucle des produits ui card -->
		<?php foreach ($products as $product): ?>
			<form method="POST" action="cart/add">
			<div class="card">
				<div class="image">
					<img src="<?= $product->picture ?>">				
				</div>
				<div class="header">
					<h3><?= $product->name ?></h3>
				</div>
				<p class="description"><?= $product->price ?>€</p>
				
			<button class="ui bottom attached button" tabindex="0" name="submitPrice" type="submit" >Add</button>
			<input  type="hidden"  name="product_id" value="<?=$product->id?>">
			</div>
			</form>	
		<?php endforeach;?>
	</section>
</div>

