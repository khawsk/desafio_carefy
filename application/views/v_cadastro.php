<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $titulo ?></title>
	<?php echo link_tag('assets/bootstrap/css/bootstrap.min.css') ?>
	<?php echo link_tag('assets/bootstrap/css/bootstrap-theme.min.css') ?>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/home.css">
	<style>
		.erro {
			color: #f00;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 class="text-center"><?php echo $titulo ?></h1>
		<div class="col-md-6 col-md-offset-3">
			<div class="row">
				<?php echo form_open('cadastro/store')  ?>
					<div class="form-group">
						<label for="nome">Nome</label><span class="erro"><?php echo form_error('nome') ?  : ''; ?></span>
						<input type="text" name="nome" id="nome" class="form-control" value="<?php echo set_value('nome') ? : (isset($nome) ? $nome : '') ?>" autofocus='true' />
					</div>
					<div class="form-group">
						<label for="telefone">Hospital</label><span class="erro"><?php echo form_error('telefone') ?  : ''; ?></span>
						<input type="text" name="hospital" id="telefone" class="form-control" value="<?php echo set_value('hospital') ? : (isset($hospital) ? $hospital : ''); ?>" />
					</div>
					<div class="form-group text-right">
						<input type="submit" value="Salvar" class="btn btn-success" />
					</div>
					<input type='hidden' name="id" value="<?php echo set_value('id') ? : (isset($id) ? $id : ''); ?>">
				<?php echo form_close(); ?>
			</div>
			<div class="row"><hr></div>
			<div class="row">
				<?php echo anchor('', 'Página Inicial', array('class' => 'btn-primary btn-lg')); ?>
			</div>
		</div>	
	</div>
</body>
</html>