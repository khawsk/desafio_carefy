<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/css/home.css">
	<?php echo link_tag('assets/bootstrap/css/bootstrap.min.css') ?>
	<?php echo link_tag('assets/bootstrap/css/bootstrap-theme.min.css') ?>
</head>
<body>
	<div class="container">
		<h1 class="text-center">SISMED</h1>
		<div class="col-md-12">
			<div class="row">
				<?php echo anchor('cadastro/create', 'Novo Cadastro', array('class' => 'btn btn-success')); ?>
			</div>
			<div class="row">
				<h3><?php echo $cadastros->num_rows(); ?> registro(s)</h3>
			</div>
			<div class="row">
			<?php if ($cadastros->num_rows() > 0): ?>
				<table class="table table-bordered" style="text-align:center;border-radiius:25px;">
					<thead class="thead-dark">
						<tr style="">
							<th style="text-align:center;">Nome</th>
							<th style="text-align:center;">Hospital</th>
							<th style="text-align:center;">Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($cadastros -> result() as $cadastro): ?>
						<tr>
							<td><?php echo $cadastro->nome ?></td>
							<td><?php echo $cadastro->hospital ?></td>
							<td><?php echo anchor("cadastro/edit/$cadastro->id", "Editar", array('class' => 'btn btn-primary')) ?>
								 | <a href="#" class='confirma_exclusao btn btn-danger' data-id="<?php echo $cadastro->id ?>" data-nome="<?php echo $cadastro->nome ?>" />Excluir</a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<?php else: ?>
					<h4>Nenhum registro cadastrado.</h4>
				<?php endif; ?>
			</div>
			<div class="row">
			    <?php echo anchor('login/logout', 'Deslogar', array('class' => 'btn btn-info btn-logout text-center')); ?>
			</div>
		</div>	
	</div>
<div class="modal fade" id="modal_confirmation">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmação de Exclusão</h4>
      </div>
      <div class="modal-body">
        <p>Deseja realmente excluir o registro <strong><span id="nome_exclusao"></span></strong>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Agora não</button>
        <button type="button" class="btn btn-danger" id="btn_excluir">Sim. Acabe com ele</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>	
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>

	<script>
	
		var base_url = "<?php echo base_url(); ?>";
	
		$(function(){
			$('.confirma_exclusao').on('click', function(e) {
			    e.preventDefault();
			    
			    var nome = $(this).data('nome');
			    var id = $(this).data('id');
			    
			    $('#modal_confirmation').data('nome', nome);
			    $('#modal_confirmation').data('id', id);
			    $('#modal_confirmation').modal('show');
			});
			
			$('#modal_confirmation').on('show.bs.modal', function () {
			  var nome = $(this).data('nome');
			  $('#nome_exclusao').text(nome);
			});	
			
			$('#btn_excluir').click(function(){
				var id = $('#modal_confirmation').data('id');
				document.location.href = base_url + "index.php/cadastro/delete/"+id;
			});					
		});
	</script>
	
</body>
</html>