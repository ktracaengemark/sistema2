<div class="container text-center" id="loginfuncionario">

    <?php echo validation_errors(); ?>

    <?php if (isset($msg)) echo $msg; ?>

    <?php echo form_open('loginfuncionario', 'role="form"'); ?>

    <p class="text-center">
        <a href="<?php echo base_url(); ?>loginfuncionario">
            <img src="<?php echo base_url() . 'arquivos/imagens/' . $modulo . '.png'; ?>" />
        </a>
    </p>
    <!--<h2 class="form-signin-heading text-center">Agenda <?php echo ucfirst($nome_modulo) ?></h2><h4><b>***** vers�o alpha *****</b></h4>-->
    <h2 class="form-signin-heading text-center">Sistema Ktraca - M�dulo "Empresas"</h2>
	
	<label class="sr-only">Usu�rio</label>
    <input type="text" id="inputText" class="form-control" placeholder="Usu�rio ou E-mail" autofocus name="Usuario" value="<?php echo set_value('Usuario'); ?>">
	   
	<label class="sr-only">Senha</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="Senha" value="">
    <br>
    <input type="hidden" name="modulo" value="<?php echo $modulo; ?>">
    <button class="btn btn-lg btn-primary btn-block" type="submit">ENTRAR</button>
    <p><a href="<?php echo base_url(); ?>loginfuncionario/recuperar/?usuario=<?php echo set_value('Usuario'); ?>">Esqueci usu�rio/senha!</a></p>
    <br>
    <a class="btn btn btn-primary btn-warning" href="<?php echo base_url(); ?>loginfuncionario/registrar" role="button">Cadastrar Novo Funcion�rio</a>
</form>

</div>