<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Veiculo </h3>
		<form action="php_action/createveiculo.php" method="POST" enctype="multipart/form-data">
			<div class="input-field col s12">
			<i class="material-icons prefix">add_circle_outline</i>
				<input type="text" name="marca" id="marca">
				<label for="marca">Marca</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">drive_eta</i>
				<input type="text" name="modelo" id="modelo">
				<label for="modelo">Modelo</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">date_range</i>
				<input type="text" name="ano" id="ano">
				<label for="ano">Ano</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">palette</i>
				<input type="text" name="cor" id="cor">
				<label for="cor">Cor</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">add_to_photos</i>
				<input type="text" name="placa" id="placa">
				<label for="placa">Placa</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">nfc</i>
				<input type="text" name="motor" id="motor">
				<label for="motor">Motor</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">local_airport</i>
				<input type="text" name="km" id="km">
				<label for="km">Km</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">monetization_on</i>
				<input type="text" name="valorFipe" id="valorFipe">
				<label for="valorFipe">Valor Fipe</label>
			</div>
			


			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="veiculos.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
