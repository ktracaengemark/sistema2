<?php if (isset($msg)) echo $msg; ?>
<div class="container-fluid">
	<div class="row">

		<div class=""><?php if (isset($nav_secundario)) echo $nav_secundario; ?></div>

		<div class="<?php echo $main; ?>">

			<?php echo validation_errors(); ?>

			<div class="panel panel-<?php echo $panel; ?>">

				<div class="panel-heading"><strong><?php echo $titulo; ?></strong></div>
				<div class="panel-body">

					<?php echo form_open_multipart($form_open_path); ?>

					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label for="NomeCliente">Nome do Cliente: *</label>
								<input type="text" class="form-control" id="NomeCliente" maxlength="255" <?php echo $readonly; ?>
									   name="NomeCliente" autofocus value="<?php echo $query['NomeCliente']; ?>">
							</div>
							<div class="col-md-3">
								<label for="Telefone1">Tel.1 - Fixo ou Celular*</label>
								<input type="text" class="form-control Celular CelularVariavel" id="Telefone1" maxlength="11" <?php echo $readonly; ?>
									   name="Telefone1" placeholder="(XX)999999999" value="<?php echo $query['Telefone1']; ?>">
							</div>
							<div class="col-md-3">
								<label for="DataNascimento">Data de Nascimento:</label>
								<input type="text" class="form-control Date" maxlength="10" <?php echo $readonly; ?>
									   name="DataNascimento" placeholder="DD/MM/AAAA" value="<?php echo $query['DataNascimento']; ?>">
							</div>
							<div class="col-md-2">
								<label for="Sexo">Sexo:</label>
								<select data-placeholder="Selecione uma op��o..." class="form-control" <?php echo $readonly; ?>
										id="Sexo" name="Sexo">
									<option value="">--Selec. o Sexo--</option>
									<?php
									foreach ($select['Sexo'] as $key => $row) {
										if ($query['Sexo'] == $key) {
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
					                                  
					<div class="form-group">
						<div class="row">
							<div class="col-md-12 text-center">
								<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#DadosComplementares" aria-expanded="false" aria-controls="DadosComplementares">
									<span class="glyphicon glyphicon-menu-down"></span> Completar Dados
								</button>
							</div>                
						</div>
					</div>                 

					<div <?php echo $collapse; ?> id="DadosComplementares">													
						<div class="form-group">	
							<div class="row">
								<div class="col-md-3">
									<label for="Telefone2">Tel.2 - Fixo ou Celular:</label>
									<input type="text" class="form-control Celular CelularVariavel" id="Telefone2" maxlength="11" <?php echo $readonly; ?>
										   name="Telefone2" placeholder="(XX)999999999" value="<?php echo $query['Telefone2']; ?>">
								</div>
								<div class="col-md-3">
									<label for="Telefone3">Tel3 - Fixo ou Celular:</label>
									<input type="text" class="form-control Celular CelularVariavel" placeholder="(XX)999999999" id="Telefone3" maxlength="11" <?php echo $readonly; ?>
										   name="Telefone3" value="<?php echo $query['Telefone3']; ?>">
								</div>
								<div class="col-md-5">
									<label for="Email">E-mail:</label>
									<input type="text" class="form-control" id="Bairro" maxlength="100" <?php echo $readonly; ?>
										   name="Email" value="<?php echo $query['Email']; ?>">
								</div>								
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="Endereco">Endre�o:</label>
									<input type="text" class="form-control" id="Endereco" maxlength="100" <?php echo $readonly; ?>
										   name="Endereco" value="<?php echo $query['Endereco']; ?>">
								</div>
								<div class="col-md-6">
									<label for="Bairro">Bairro:</label>
									<input type="text" class="form-control" id="Bairro" maxlength="100" <?php echo $readonly; ?>
										   name="Bairro" value="<?php echo $query['Bairro']; ?>">
								</div>
							</div>
						</div> 

						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="Municipio">Munic�pio:</label><br>
									<select data-placeholder="Selecione um Munic�pio..." class="form-control" <?php echo $disabled; ?>
											id="Municipio" name="Municipio">
										<option value="">-- Selec.um Munic�pio --</option>
										<?php
										foreach ($select['Municipio'] as $key => $row) {
											if ($query['Municipio'] == $key) {
												echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
											} else {
												echo '<option value="' . $key . '">' . $row . '</option>';
											}
										}
										?>
									</select>
								</div>							
								<div class="col-md-3">
									<label for="RegistroFicha">Ficha N�:</label>
									<input type="text" class="form-control" maxlength="45" <?php echo $readonly; ?>
										   name="RegistroFicha" value="<?php echo $query['RegistroFicha']; ?>">
								</div>
							</div>
						</div> 

						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label for="Obs">OBS:</label>
									<textarea class="form-control" id="Obs" <?php echo $readonly; ?>
											  name="Obs"><?php echo $query['Obs']; ?></textarea>
								</div>
							</div>
						</div>                 

					</div>                                    

					<br>

					<div class="form-group">
						<div class="row">
							<input type="hidden" name="idApp_Cliente" value="<?php echo $query['idApp_Cliente']; ?>">
							<?php if ($metodo == 2) { ?>

								<div class="col-md-6">
									<button class="btn btn-lg btn-primary" id="inputDb" data-loading-text="Aguarde..." type="submit">
										<span class="glyphicon glyphicon-save"></span> Salvar
									</button>
								</div>
								<div class="col-md-6 text-right">
									<button  type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-loading-text="Aguarde..." data-target=".bs-excluir-modal-sm">
										<span class="glyphicon glyphicon-trash"></span> Excluir
									</button>
								</div>

								<div class="modal fade bs-excluir-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header bg-danger">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title">Tem certeza que deseja excluir?</h4>
											</div>
											<div class="modal-body">
												<p>Ao confirmar esta opera��o todos os dados ser�o exclu�dos permanentemente do sistema.
													Esta opera��o � irrevers�vel.</p>
											</div>
											<div class="modal-footer">
												<div class="col-md-6 text-left">
													<button type="button" class="btn btn-warning" data-dismiss="modal">
														<span class="glyphicon glyphicon-ban-circle"></span> Cancelar
													</button>
												</div>
												<div class="col-md-6 text-right">
													<a class="btn btn-danger" href="<?php echo base_url() . 'cliente/excluir/' . $query['idApp_Cliente'] ?>" role="button">
														<span class="glyphicon glyphicon-trash"></span> Confirmar Exclus�o
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

							<?php } elseif ($metodo == 3) { ?>
								<div class="col-md-12 text-center">
									<button class="btn btn-lg btn-danger" id="inputDb" data-loading-text="Aguarde..." name="submit" value="1" type="submit">
										<span class="glyphicon glyphicon-trash"></span> Excluir
									</button>
									<button class="btn btn-lg btn-warning" id="inputDb" onClick="history.go(-1);
											return true;">
										<span class="glyphicon glyphicon-ban-circle"></span> Cancelar
									</button>
								</div>
							<?php } else { ?>
								<div class="col-md-6">
									<button class="btn btn-lg btn-primary" id="inputDb" data-loading-text="Aguarde..." name="submit" value="1" type="submit">
										<span class="glyphicon glyphicon-save"></span> Salvar
									</button>
								</div>
							<?php } ?>
						</div>
					</div>                

					</form>

				</div>

			</div>

		</div>

	</div>
</div>