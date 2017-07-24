<?php if ($msg) echo $msg; ?>

<div class="container-fluid">
    <div class="row">

        <div class="main">

            <?php echo validation_errors(); ?>

            <div class="panel panel-primary">

                <div class="panel-heading"><strong><?php echo $titulo; ?></strong></div>
                <div class="panel-body">

                    <?php echo form_open('relatorio/tarefa', 'role="form"'); ?>

                    <div class="form-group">
                        <div class="row">							
                            <div class="col-md-2">
                                <label for="Ordenamento">Respons�vel da Tarefa:</label>
                                <select data-placeholder="Selecione uma op��o..." class="form-control Chosen"
                                        id="NomeProfissional" name="NomeProfissional">
                                    <?php
                                    foreach ($select['NomeProfissional'] as $key => $row) {
                                        if ($query['NomeProfissional'] == $key) {
                                            echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
                                        } else {
                                            echo '<option value="' . $key . '">' . $row . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
							<!--
							<div class="col-md-2">
                                <label for="Ordenamento">Tarefa / Miss�o</label>
                                <select data-placeholder="Selecione uma op��o..." class="form-control Chosen"
                                        id="ObsTarefa" name="ObsTarefa">
                                    <?php
                                    foreach ($select['ObsTarefa'] as $key => $row) {
                                        if ($query['ObsTarefa'] == $key) {
                                            echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
                                        } else {
                                            echo '<option value="' . $key . '">' . $row . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
							-->

							<div class="col-md-1">
                                <label for="AprovadoTarefa">Tarefa Conclu�da?</label>
                                <select data-placeholder="Selecione uma op��o..." class="form-control Chosen"
                                        id="AprovadoTarefa" name="AprovadoTarefa">
                                    <?php
                                    foreach ($select['AprovadoTarefa'] as $key => $row) {
                                        if ($query['AprovadoTarefa'] == $key) {
                                            echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
                                        } else {
                                            echo '<option value="' . $key . '">' . $row . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

							<div class="col-md-2">
                                <label for="Ordenamento">Respons�vel da A��o:</label>
                                <select data-placeholder="Selecione uma op��o..." class="form-control Chosen"
                                        id="Profissional" name="Profissional">
                                    <?php
                                    foreach ($select['Profissional'] as $key => $row) {
                                        if ($query['Profissional'] == $key) {
                                            echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
                                        } else {
                                            echo '<option value="' . $key . '">' . $row . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
							<!--
							<div class="col-md-2">
                                <label for="Ordenamento">A��o</label>
                                <select data-placeholder="Selecione uma op��o..." class="form-control Chosen"
                                        id="Procedtarefa" name="Procedtarefa">
                                    <?php
                                    foreach ($select['Procedtarefa'] as $key => $row) {
                                        if ($query['Procedtarefa'] == $key) {
                                            echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
                                        } else {
                                            echo '<option value="' . $key . '">' . $row . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
							-->

							<div class="col-md-1">
                                <label for="ConcluidoProcedtarefa">A��o Conclu�da?</label>
                                <select data-placeholder="Selecione uma op��o..." class="form-control Chosen"
                                        id="ConcluidoProcedtarefa" name="ConcluidoProcedtarefa">
                                    <?php
                                    foreach ($select['ConcluidoProcedtarefa'] as $key => $row) {
                                        if ($query['ConcluidoProcedtarefa'] == $key) {
                                            echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
                                        } else {
                                            echo '<option value="' . $key . '">' . $row . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
							<!--														                           						                            							
							<div class="col-md-1">
                                <label for="ServicoConcluido">Rotina</label>
                                <select data-placeholder="Selecione uma op��o..." class="form-control Chosen"
                                        id="ServicoConcluido" name="ServicoConcluido">
                                    <?php
                                    foreach ($select['ServicoConcluido'] as $key => $row) {
                                        if ($query['ServicoConcluido'] == $key) {
                                            echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
                                        } else {
                                            echo '<option value="' . $key . '">' . $row . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-md-1">
                                <label for="QuitadoTarefa">Prioridade</label>
                                <select data-placeholder="Selecione uma op��o..." class="form-control Chosen"
                                        id="QuitadoTarefa" name="QuitadoTarefa">
                                    <?php
                                    foreach ($select['QuitadoTarefa'] as $key => $row) {
                                        if ($query['QuitadoTarefa'] == $key) {
                                            echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
                                        } else {
                                            echo '<option value="' . $key . '">' . $row . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>							
							
                            <div class="col-md-4">
                                <label for="Ordenamento">Ordenamento:</label>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select data-placeholder="Selecione uma op��o..." class="form-control Chosen"
                                                    id="Campo" name="Campo">
                                                <?php
                                                foreach ($select['Campo'] as $key => $row) {
                                                    if ($query['Campo'] == $key) {
                                                        echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
                                                    } else {
                                                        echo '<option value="' . $key . '">' . $row . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <select data-placeholder="Selecione uma op��o..." class="form-control Chosen"
                                                    id="Ordenamento" name="Ordenamento">
                                                <?php
                                                foreach ($select['Ordenamento'] as $key => $row) {
                                                    if ($query['Ordenamento'] == $key) {
                                                        echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
                                                    } else {
                                                        echo '<option value="' . $key . '">' . $row . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
							-->
							<div class="col-md-2">
                                <label for="DataInicio">Data da Tarefa - In�cio: *</label>
                                <div class="input-group DatePicker">
                                    <input type="text" class="form-control Date" maxlength="10" placeholder="DD/MM/AAAA"
                                           autofocus name="DataInicio" value="<?php echo set_value('DataInicio', $query['DataInicio']); ?>">
                                    <span class="input-group-addon" disabled>
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="DataFim">Data da Tarefa - Fim: (opcional)</label>
                                <div class="input-group DatePicker">
                                    <input type="text" class="form-control Date" maxlength="10" placeholder="DD/MM/AAAA"
                                           autofocus name="DataFim" value="<?php echo set_value('DataFim', $query['DataFim']); ?>">
                                    <span class="input-group-addon" disabled>
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
							
                        </div>						
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 text-left">
                                <button class="btn btn-lg btn-primary" name="pesquisar" value="0" type="submit">
                                    <span class="glyphicon glyphicon-search"></span> Pesquisar
                                </button>
                            </div>
							<br>
							<div class="col-md-2 text-left">											
									<a class="btn btn-lg btn-warning" href="<?php echo base_url() ?>tarefa/cadastrar" role="button"> 
										<span class="glyphicon glyphicon-plus"></span> Nova Tarefa
									</a>
							</div>
							<br>
							<div class="col-md-2 text-left">											
									<a class="btn btn-lg btn-info" href="<?php echo base_url() ?>agenda" role="button"> 
										<span class="glyphicon glyphicon-calendar"></span> Agenda
									</a>															
							</div>
                        </div>
                    </div>

                    </form>

                    <br>

                    <?php echo (isset($list)) ? $list : FALSE ?>

                </div>

            </div>

        </div>

    </div>
</div>