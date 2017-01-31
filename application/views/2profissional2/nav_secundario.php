<?php if ( !isset($evento) && isset($_SESSION['Profissional'])) { ?>
<div class="container-fluid">
	<ul class="nav nav-sidebar">
		<li <?php if (preg_match("/prontuario\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; //(.)+\/prontuario/   ?>>
			<a href="<?php echo base_url() . 'profissional/prontuario/' . $_SESSION['Profissional']['idApp_Profissional']; ?>">
				<span class="glyphicon glyphicon-user"> </span> Dados do Funcion.& Profissional<span class="sr-only">(current)</span>
			</a>
		</li>

		<li <?php if (preg_match("/profissional\/alterar\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ///(.)+\/alterar/    ?>>
			<a href="<?php echo base_url() . 'profissional/alterar/' . $_SESSION['Profissional']['idApp_Profissional']; ?>">
				<span class="glyphicon glyphicon-edit"></span> Editar Dados
			</a>
		</li>

		<li <?php if (preg_match("/contatoProf\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
			<a href="<?php echo base_url() . 'contatoProf/pesquisar/' . $_SESSION['Profissional']['idApp_Profissional']; ?>">
				<span class="fa fa-user-plus"></span> ContatoProfs
			</a>
		</li>      
	</ul>
	<ul class="nav nav-sidebar">
		<li>
			<div class="text-center t">				
				<h3><?php echo '<strong>' . $_SESSION['Profissional']['NomeProfissional'] . '</strong><br><small>Identificador: ' . $_SESSION['Profissional']['idApp_Profissional'] . '</small>' ?></h3>
			</div>
		</li>
	</ul>
</div>
<?php } ?>