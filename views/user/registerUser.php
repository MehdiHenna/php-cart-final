<?php $this->layout('layout', ['title' => 'Super boutique']) ?>
<div class="ui container">
<form method="post" action="/user" class="ui form">
	<div class="field">
		<label>Nom</label>
		<input type="text" name="first_name" placeholder="Votre nom">
	</div>
	<div class="field">
		<label>Prénom</label>
		<input type="text" name="last_name" placeholder="Prénom">
	</div>
	<div class="field">
		<label>Adresse</label>
		<input type="text" name="address" placeholder="Votre adresse">
	</div>
	<div class="field">
		<label>Code postal</label>
		<input type="text" name="postcode" placeholder="Votre code postal">
	</div>
	<div class="field">
		<label>Numero de téléphone</label>
		<input type="text" name="phone" placeholder="Votre numéro de téléphone">
	</div>
	<button class="ui button" type="submit">Enregistré</button>
	</div>
</form>
