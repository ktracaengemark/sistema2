<?php (isset($contatoProf)) ? $query = $contatoProf : FALSE; ?>
<div class="container-fluid">
	<div class="row">
		<div class="btn-group" role="group">
			<a class="btn btn-lg btn-primary active"> 
				<span class="glyphicon glyphicon-sort-by-attributes"></span> <?php echo '<b>Total de Contato Profs:</b> ' . $query->num_rows() ?>
			</a>        
		</div>

		<div class="btn-group" role="group">
			<a class="btn btn-lg btn-warning" href="<?php echo base_url() ?>contatoProf/cadastrar" role="button"> 
				<span class="glyphicon glyphicon-plus"></span> Cadastrar Novo Contato Prof
			</a>
		</div>
	</div>        
</div>
<br>

<?php
foreach ($query->result_array() as $row) {

	if ($row['StatusVida'] == 'O') {
		$row['class'] = 'danger';
		#$row['icon'] = 'glyphicon glyphicon-info-sign';
		$row['vida'] = '<span class="label label-danger" style="font-size: 14px;">�bito</span>';
	} else {
		$row['class'] = 'info';
		#$row['icon'] = 'fa fa-user';
		$row['vida'] = '';
	}
	
	if ($row['Sexo'] == 'FEMININO') {
		$row['icon'] = 'fa fa-female';
		$row['icon-sex'] = 'fa fa-venus';
	}
	elseif ($row['Sexo'] == 'MASCULINO') {
		$row['icon'] = 'fa fa-male';
		$row['icon-sex'] = 'fa fa-mars';
	}
	else  {
		$row['icon'] = 'fa fa-user';
		$row['icon-sex'] = 'fa fa-genderless';
	}
	
	?>

		<div class="bs-callout bs-callout-<?php echo $row['class']; ?>" id=callout-overview-not-both> 

			<a class="btn btn-<?php echo $row['class']; ?>" href="<?php echo base_url() . 'contatoProf/alterar/' . $row['idApp_ContatoProf'] ?>" role="button"> 
				<span class="glyphicon glyphicon-edit"></span> Editar Dados
			</a>
			<!--<a class="btn btn-<?php echo $row['class']; ?>" href="<?php echo base_url() . 'consulta/cadastrar/' . $row['idApp_Profissional'] . '/' . $row['idApp_ContatoProf'] ?>" role="button"> 
                <span class="glyphicon glyphicon-time"></span> Marcar Sess�o
            </a>            
            <a class="btn btn-<?php echo $row['class']; ?>" href="<?php echo base_url() . 'consulta/listar/' . $row['idApp_Profissional'] ?>" role="button"> 
                <span class="glyphicon glyphicon-list"></span> Listar Sess�es
            </a> -->	
			  			
			<br><br>
			
			<h4>
				<span class="<?php echo $row['icon']; ?>"></span> 
				Contato: <?php echo $row['NomeContatoProf'] . '</small></code>'; ?>
				<?php echo $row['vida']; ?>
			</h4> 

			
			
			<p>
				<?php if ($row['DataNascimento']) { ?>
				<span class="glyphicon glyphicon-gift"></span> <b>Data de Nascimento:</b> <?php echo $row['DataNascimento']; ?> -
					
					<b>Idade:</b> <?php echo $row['Idade']; ?> -
				
				<?php } if ($row['Sexo']) { ?>
				<span class="<?php echo $row['icon-sex']; ?>"></span> <b>Sexo:</b> <?php echo $row['Sexo']; ?>
				<?php } ?>
				
				<?php if ($row['TelefoneContatoProf']) { ?>
				<span class="glyphicon glyphicon-phone-alt"></span> <b>Telefone:</b> <?php echo $row['TelefoneContatoProf']; ?>
				<?php } ?>
				
				
				
			</p>

			<p>
				<span class="glyphicon glyphicon-pencil"></span> <b>Obs:</b> <?php echo nl2br($row['Obs']); ?>
			</p>

		</div>        

<?php } ?>