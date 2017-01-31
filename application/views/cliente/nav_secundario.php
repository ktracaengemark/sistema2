<?php if ( !isset($evento) && isset($_SESSION['Cliente'])) { ?>
<div class="container-fluid">
	<ul class="nav nav-sidebar">
		<li <?php if (preg_match("/prontuario\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; //(.)+\/prontuario/   ?>>
			<a href="<?php echo base_url() . 'cliente/prontuario/' . $_SESSION['Cliente']['idApp_Cliente']; ?>">
				<span class="glyphicon glyphicon-user"> </span> Dados do Cliente <span class="sr-only">(current)</span>
			</a>
		</li>

		<li <?php if (preg_match("/cliente\/alterar\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ///(.)+\/alterar/    ?>>
			<a href="<?php echo base_url() . 'cliente/alterar/' . $_SESSION['Cliente']['idApp_Cliente']; ?>">
				<span class="glyphicon glyphicon-edit"></span> Editar Dados
			</a>
		</li>

		<li <?php if (preg_match("/contatocliente\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
			<a href="<?php echo base_url() . 'contatocliente/pesquisar/' . $_SESSION['Cliente']['idApp_Cliente']; ?>">
				<span class="fa fa-user-plus"></span> Contatos
			</a>
		</li>

		<li <?php if (preg_match("/consulta\/(cadastrar|alterar)\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
			<a href="<?php echo base_url() . 'consulta/cadastrar/' . $_SESSION['Cliente']['idApp_Cliente']; ?>">
				<span class="glyphicon glyphicon-time"></span> Marcar Sess�o
			</a>
		</li>

		<li <?php if (preg_match("/consulta\/listar\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
			<a href="<?php echo base_url() . 'consulta/listar/' . $_SESSION['Cliente']['idApp_Cliente']; ?>">
				<span class="glyphicon glyphicon-list"></span> Listar Sess�es
			</a>
		</li>

		<li <?php if (preg_match("/orcatrata\/cadastrar\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
			<a href="<?php echo base_url() . 'orcatrata/cadastrar/' . $_SESSION['Cliente']['idApp_Cliente']; ?>">
				<span class="glyphicon glyphicon-plus"></span> Novo Or�amento
			</a>
		</li>

		<li <?php if (preg_match("/orcatrata\/listar\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
			<a href="<?php echo base_url() . 'orcatrata/listar/' . $_SESSION['Cliente']['idApp_Cliente']; ?>">
				<span class="glyphicon glyphicon-list-alt"></span> Listar Or�amentos
			</a>
		</li>
	</ul>

	<ul class="nav nav-sidebar">
		<li>
			<div class="text-center t">
				<h3><?php echo '<strong>' . $_SESSION['Cliente']['NomeCliente'] . '</strong><br><small>Identificador: ' . $_SESSION['Cliente']['idApp_Cliente'] . '</small>' ?></h3>
			</div>
		</li>
	</ul>
</div>	

<?php } ?>
