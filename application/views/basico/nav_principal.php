<nav class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
	<div class="container"> 
		<div class="navbar-header"> 
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
				<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
			</button> 
			<a class="navbar-brand">
			<img class="img-responsive" src="arquivos/imagens/ktraca.png" alt="logo">
			</a>
		</div> 
		<div class="collapse navbar-collapse"> 											
			<ul class="nav navbar-nav navbar-left"> 						
				<li>																	
					<li><a class="navbar-brand" href="<?php echo base_url(); ?>agenda">AGENDA</a></li>
					<?php echo form_open(base_url() . 'cliente/pesquisar', 'class="navbar-form navbar-left"'); ?>
					<form>
					<div class="input-group">
						<input type="text" placeholder="Pesquisar Cliente" class="form-control" name="Pesquisa" value="">
						<span class="input-group-btn">
							<button class="btn btn-info" type="submit"><span class="glyphicon glyphicon-search"></span></button>
						</span>
					</div>					
					</form>											
				</li>				
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>cliente/pesquisar">Clientes</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>profissional/pesquisar">Prof & Func.</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>empresa/pesquisar">Empresas & Fornec.</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>funcao/cadastrar/funcao">Fun��o dos Prof. & Func.</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>atividade/cadastrar/atividade">Atividade das Empresas & Fornec.</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>formapag/cadastrar/formapag">Forma de Pagamento</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>tipodespesa/cadastrar/tipodespesa">Tipo de Despesa</a></li>
						<li role="separator" class="divider"></li>						
						<li><a href="<?php echo base_url() ?>relapes/cadastrar">Rela��o Pessoal</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relacom/cadastrar">Rela��o Comercial</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>servico/cadastrar">Tabela de Pre�o de Servi�os</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>produto/cadastrar">Tabela de Pre�o de Produtos</a></li>
						<li role="separator" class="divider"></li>
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Anota��es<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>cliente/pesquisar">Or�amentos & Entradas</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>despesa/cadastrar/despesa">Despesas & Sa�das</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>cliente/pesquisar">Consultas & Reuni�es</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>tarefa/listar">Tarefas & A Fazer</a></li>
						<li role="separator" class="divider"></li>
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Financeiro<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>relatorio/financeiro">Or�amentos & Pagamentos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/despesa">Despesas & Sa�das</a></li>
						<li role="separator" class="divider"></li>

					</ul>
				</li>
	
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relat�rios<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>relatorio/clientes">Clientes & Contatos</a></li>											
						<li role="separator" class="divider"></li>						
						<li><a href="<?php echo base_url() ?>relatorio/profissionais">Prof. & Func & Contatos.</a></li>
						<li role="separator" class="divider"></li>						
						<li><a href="<?php echo base_url() ?>relatorio/empresas">Empresas & Fornec & Contatos.</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/orcamentopc">Clientes & Procedimentos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/tarefa">Tarefas & Profissionais</a></li>
						<li role="separator" class="divider"></li>											
						<li><a href="<?php echo base_url() ?>relatorio/orcamentosv">Clientes & Servi�os</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/orcamento">Clientes & Or�amentos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/financeiro">Or�amentos & Pagamentos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/despesa">Despesas & Sa�das</a></li>
						<li role="separator" class="divider"></li>																			
						<!--<li><a href="<?php echo base_url() ?>">Estoque</a></li>
						<li role="separator" class="divider"></li>-->
					</ul>
				</li>
				<div class="btn-toolbar navbar-form navbar-right" role="toolbar" aria-label="...">					
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn btn-info active">
							<span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['log']['Usuario']; ?>
						</button>
					</div>
					<div class="btn-group" role="group" aria-label="...">
						<a href="<?php echo base_url(); ?>login/sair">
							<button type="button" class="btn btn-danger">
								<span class="glyphicon glyphicon-log-out"></span> Sair
							</button>
						</a>
					</div>										
					<div class="btn-group" role="group" aria-label="..."> </div>
				</div>																													
			</ul>						
		</div> 
	</div> 
</nav>

<br>
