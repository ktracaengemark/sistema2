<?php if (isset($msg)) echo $msg; ?>
<div class="container-fluid">
	<div class="row">

		<div class="col-sm-3 col-md-2">
			<?php echo $nav_secundario; ?>
		</div>

		<div class="col-sm-7 col-sm-offset-3 col-md-8 col-md-offset-2 main">

			<?php echo validation_errors(); ?>

			<div class="panel panel-<?php echo $panel; ?>">

				<div class="panel-heading"><strong><?php echo $titulo; ?></strong></div>
				<div class="panel-body">

					<?php echo form_open_multipart($form_open_path); ?>
					
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label for="Obs">Evento:</label>
								<textarea class="form-control" id="Obs"
								autofocus name="Obs"><?php echo $query['Obs']; ?></textarea>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<label for="Data">Data:</label>
								<div class="input-group <?php echo $datepicker; ?>">
									<input type="text" class="form-control Date" <?php echo $readonly; ?> maxlength="10" placeholder="DD/MM/AAAA"
										   name="Data" value="<?php echo $query['Data']; ?>">
									<span class="input-group-addon" disabled>
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
							<div class="col-md-7 form-inline">
								<div class="form-group">
									<label for="Hora">Hora:</label><br>
									De 
									<div class="input-group <?php echo $timepicker; ?>">
										<input type="text" class="form-control Time" <?php echo $readonly; ?> maxlength="5"  placeholder="HH:MM"
											   accept=""name="HoraInicio" value="<?php echo $query['HoraInicio']; ?>">
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-time"></span>
										</span>
									</div>

									At�
									<div class="input-group <?php echo $timepicker; ?>">
										<input type="text" class="form-control Time" <?php echo $readonly; ?> maxlength="5" placeholder="HH:MM"
											   accept=""name="HoraFim" value="<?php echo $query['HoraFim']; ?>">
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-time"></span>
										</span>
									</div>
								</div>
							</div>

						</div>
					</div> 
					 
					<br>

					<div class="form-group">
						<div class="row">
							<input type="hidden" name="idApp_Consulta" value="<?php echo $query['idApp_Consulta']; ?>">
							<input type="hidden" name="idApp_Agenda" value="<?php echo $_SESSION['log']['Agenda']; ?>">
							<input type="hidden" name="Evento" value="1">
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
													<a class="btn btn-danger" href="<?php echo base_url() . 'consulta/excluir/' . $query['idApp_Consulta'] ?>" role="button">
														<span class="glyphicon glyphicon-trash"></span> Confirmar Exclus�o
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

							<?php } else { ?>
								<div class="col-md-6">
									<button class="btn btn-lg btn-primary" id="inputDb" data-loading-text="Aguarde..." type="submit">
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