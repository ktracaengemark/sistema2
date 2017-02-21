<!--<nav class="navbar navbar-inverse navbar-fixed-top" role="banner">

    <div class="row">	
        <div class="col-md-9">
            <ul class="nav navbar-nav">
                <li class="active"><a class="navbar-brand" href="<?php echo base_url(); ?>agenda">AGENDA</a></li>
				<li>
                    <?php echo form_open(base_url() . 'cliente/pesquisar', 'class="navbar-form navbar-left"'); ?>
                    <div class="input-group">
                        <input type="text" placeholder="Pesquisar" class="form-control" name="Pesquisa" value="">
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>
                    </form>
                </li>
				

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pesquisas & Cadastros<span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>cliente/pesquisar">Clientes</a></li>
						<li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url() ?>cliente/pesquisar">Contatos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>profissional/pesquisar">Funcionários & Profissionais</a></li>
					    <li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>empresa/pesquisar">Empresas & Prestadores de Serviço</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>funcao/cadastrar/funcao">Função dos Funcionários & Profissionais</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>atividade/cadastrar/atividade">Atividade das Empresas & Prestadores de Serviço</a></li>
						<li><a href="<?php echo base_url() ?>servico/cadastrar">Tabela de Preço de Serviços</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>produto/cadastrar">Tabela de Preço de Produtos</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultas & Orçamentos<span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>cliente/pesquisar">Consultas & Sessões</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>cliente/pesquisar">Orçamento & Plano de Tratamento</a></li>											
                    </ul>
                </li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Despesas<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>despesa/cadastrar/despesa">Despesas</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>tipodespesa/cadastrar/tipodespesa">Tipo de Despesa</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatórios<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>">Financeiro</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>">Estoque</a></li>
					</ul>
				</li>

				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Outros<span class="caret"></span></a>
					<ul class="dropdown-menu">
					    <li><a href="<?php echo base_url() ?>profissional/pesquisar">Pesquisar/Cadastrar Funcionários/Profissionais</a></li>
					    <li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>empresa/pesquisar">Pesquisar/Cadastrar Empresas/Prestadores de Serviço</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>funcao/cadastrar/funcao">Função dos Funcionários/Profissionais</a></li>
						<li><a href="<?php echo base_url() ?>atividade/cadastrar/atividade">Atividade das Empresas/Prestadores de Serviço</a></li>
					</ul>
				</li>

                <li class="active"><a class="navbar-brand" href="<?php echo base_url(); ?>teste">TESTE</a></li>-->
            <!--</ul>

        </div>

        <div class="col-md-3">
            <div class="btn-toolbar navbar-form navbar-right" role="toolbar" aria-label="...">
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn active" id="countdowndiv">
                        <span class="glyphicon glyphicon-hourglass" id="clock"></span>
                    </button>
                </div>
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
        </div>


    </div>

</nav>-->
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
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vendas<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>cliente/pesquisar">Vendas</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>cliente/pesquisar">Orçamentos</a></li>											
						<li role="separator" class="divider"></li>
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Despesas<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>despesa/cadastrar/despesa">Despesas</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>tipodespesa/cadastrar/tipodespesa">Tipo de Despesa</a></li>
						<li role="separator" class="divider"></li>
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultas<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>cliente/pesquisar">Consultas & Sessões</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>cliente/pesquisar">Planos de Tratamento & Orçamentos  </a></li>											
						<li role="separator" class="divider"></li>
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatórios<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>relatorio/financeiro">Financeiro</a></li>					
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>">Estoque</a></li>
						<li role="separator" class="divider"></li>
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>cliente/pesquisar">Clientes</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>cliente/pesquisar">Contatos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>profissional/pesquisar">Funcionários</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>profissional/pesquisar">Profissionais</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>empresa/pesquisar">Fornecedores</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>empresa/pesquisar">Prestadores de Serviço</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>funcao/cadastrar/funcao">Função dos Funcionários</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>funcao/cadastrar/funcao">Função dos Profissionais</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>formapag/cadastrar/formapag">Forma de Pagamento</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>atividade/cadastrar/atividade">Atividade dos Fornecedores</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>atividade/cadastrar/atividade">Atividade dos Prestadores de Serviço</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>servico/cadastrar">Tabela de Preço de Serviços</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>produto/cadastrar">Tabela de Preço de Produtos</a></li>
						<li role="separator" class="divider"></li>
					</ul>
				</li>																					
			</ul>			
			<div class="col-md-3">
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
			</div>				
		</div> 
	</div> 
</nav>

<br>
