<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';
/* Verificação
if(!isset($_SESSION['logado'])):
	header('Location: index.php');
endif;
*/?>
<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> Veiculos </h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Marca:</th>
					<th>Modelo:</th>
					<th>Ano:</th>
					<th>Cor:</th>
					<th>Placa:</th>
					<th>Motor:</th>
					<th>Km:</th>
					<th>Valor Tabela Fipe:</th>

				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM tbveiculos";
				$resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['marca']; ?></td>
					<td><?php echo $dados['modelo']; ?></td>
					<td><?php echo $dados['ano']; ?></td>
					<td><?php echo $dados['cor']; ?></td>
					<td><?php echo $dados['placa']; ?></td>
					<td><?php echo $dados['motor']; ?></td>
					<td><?php echo $dados['km']; ?></td>
					<td><?php echo $dados['valorFipe']; ?></td>
					<td><a href="editarusuario.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir esse Veiculo?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php_action/deleteveiculos.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					      	<button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>

					      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

					      </form>

					    </div>
					  </div>


				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		<br>
		<a href="adicionarveiculo.php" class="btn">Adicionar Veiculo</a>
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>

