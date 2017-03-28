<div class="container-fluid">

	<div class="form-group">
		<div class="row">
			<a class="btn btn-lg btn-warning" href="<?php echo base_url() ?>tarefa/cadastrar" role="button"> 
				<span class="glyphicon glyphicon-plus"></span> Cadastrar Nova Tarefa
			</a>
		</div>	
	</div>
    <div class="row">

        <div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
    			<li role="presentation"><a href="#proxima" aria-controls="proxima" role="tab" data-toggle="tab">Conclu�da</a></li>
                <li role="presentation" class="active"><a href="#anterior" aria-controls="anterior" role="tab" data-toggle="tab">N�o Conclu�da</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

    			<!-- Pr�ximas Consultas -->
                <div role="tabpanel" class="tab-pane" id="proxima">

                    <?php
                    if ($aprovado) {

                        foreach ($aprovado->result_array() as $row) {
                    ?>

                    <div class="bs-callout bs-callout-success" id=callout-overview-not-both>

                        <a class="btn btn-success" href="<?php echo base_url() . 'tarefa/alterar/' . $row['idApp_Tarefa'] ?>" role="button">
                            <span class="glyphicon glyphicon-edit"></span> Editar Dados
                        </a>

                        <br><br>

                        <h4>
                            <span class="glyphicon glyphicon-pencil"></span> <b>Tarefa:</b> <?php echo nl2br($row['ObsTarefa']); ?>							
                        </h4>
						<p>                           
							<?php if ($row['DataTarefa']) { ?>
                            <span class="glyphicon glyphicon-calendar"></span> <b>Criada:</b> <?php echo $row['DataTarefa']; ?> -
                            <?php } if ($row['DataPrazoTarefa']) { ?>
                            <span class="glyphicon glyphicon-calendar"></span> <b>Prazo:</b> <?php echo $row['DataPrazoTarefa']; ?>
							<?php } if ($row['QuitadoTarefa']) { ?>
                            <span class="glyphicon glyphicon-calendar"></span> <b>Prioridade?</b> <?php echo $row['QuitadoTarefa']; ?>
                            <?php } ?>						
						</p>
                        <p>
                            <?php if ($row['ProfissionalTarefa']) { ?>
                            <span class="glyphicon glyphicon-user"></span> <b>Respons�vel:</b> <?php echo $row['ProfissionalTarefa']; ?> -
                            <?php } if ($row['AprovadoTarefa']) { ?>
                            <span class="glyphicon glyphicon-thumbs-up"></span> <b>Tarefa Conclu�da?</b> <?php echo $row['AprovadoTarefa']; ?>
                            <?php } ?>
                        </p>
                        

                    </div>

                    <?php
                        }
                    } else {
                        echo '<br><div class="alert alert-info text-center" role="alert"><b>Nenhum registro</b></div>';
                    }
                    ?>

                </div>

                <!-- Hist�rico de Consultas -->
                <div role="tabpanel" class="tab-pane active" id="anterior">

                    <?php
                    if ($naoaprovado) {

                        foreach ($naoaprovado->result_array() as $row) {
                    ?>

                    <div class="bs-callout bs-callout-danger" id=callout-overview-not-both>

                        <a class="btn btn-danger" href="<?php echo base_url() . 'tarefa/alterar/' . $row['idApp_Tarefa'] ?>" role="button">
                            <span class="glyphicon glyphicon-edit"></span> Editar Dados
                        </a>

                        <br><br>

                        <h4>
                            <span class="glyphicon glyphicon-pencil"></span> <b>Tarefa:</b> <?php echo nl2br($row['ObsTarefa']); ?>							
                        </h4>
						<p>                           
							<?php if ($row['DataTarefa']) { ?>
                            <span class="glyphicon glyphicon-calendar"></span> <b>Criada:</b> <?php echo $row['DataTarefa']; ?> -
                            <?php } if ($row['DataPrazoTarefa']) { ?>
                            <span class="glyphicon glyphicon-calendar"></span> <b>Prazo:</b> <?php echo $row['DataPrazoTarefa']; ?>
							<?php } if ($row['QuitadoTarefa']) { ?>
                            <span class="glyphicon glyphicon-calendar"></span> <b>Prioridade?</b> <?php echo $row['QuitadoTarefa']; ?>
                            <?php } ?>						
						</p>

                        <p>
                            <?php if ($row['ProfissionalTarefa']) { ?>
                            <span class="glyphicon glyphicon-user"></span> <b>Respons�vel:</b> <?php echo $row['ProfissionalTarefa']; ?> -
                            <?php } if ($row['AprovadoTarefa']) { ?>
                            <span class="glyphicon glyphicon-thumbs-down"></span> <b>Tarefa Conclu�da?</b> <?php echo $row['AprovadoTarefa']; ?>
                            <?php } ?>

                        </p>                       

                    </div>

                    <?php
                        }
                    } else {
                        echo '<br><div class="alert alert-info text-center" role="alert"><b>Nenhum registro</b></div>';
                    }
                    ?>

                </div>

            </div>

        </div>

    </div>

</div>