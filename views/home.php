<?php $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui container">
	<h1 class="ui header">My Super Products</h1>
	<hr class="ui divider">
	<section class="ui three stackable cards">
		<!-- boucle des produits ui card -->
		<?php foreach ($products as $product): ?>
			<div class="card">
				<div class="image">
					<img src="<?= $product->picture ?>">				
				</div>
				<div class="header">
					<h3><?= $product->name ?></h3>
				</div>
				<p class="description"><?= $product->price ?>€</p>
			<div class="ui bottom attached animated button" tabindex="0">Add</div>
			</div>
				
			
		<?php endforeach;?>
	</section>
</div>

