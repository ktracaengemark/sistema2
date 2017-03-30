<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-03-30 17:40:03 --> Severity: Notice --> Undefined index: QuitadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_orcamentopc.php 62
ERROR - 2017-03-30 17:40:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_orcamentopc.php 62
ERROR - 2017-03-30 17:40:04 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-30 17:43:41 --> Severity: Notice --> Undefined index: QuitadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_orcamentopc.php 62
ERROR - 2017-03-30 17:43:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_orcamentopc.php 62
ERROR - 2017-03-30 17:43:41 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-30 17:44:22 --> Severity: Notice --> Undefined index: QuitadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_orcamentopc.php 62
ERROR - 2017-03-30 17:44:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_orcamentopc.php 62
ERROR - 2017-03-30 17:44:22 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-30 17:44:51 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-30 17:45:16 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-30 17:46:02 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sistema2\application\views\tarefa\form_tarefa.php 335
ERROR - 2017-03-30 17:46:02 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sistema2\application\views\tarefa\form_tarefa.php 336
ERROR - 2017-03-30 17:46:03 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_Tarefa WHERE idApp_Tarefa = arquivos
ERROR - 2017-03-30 17:46:04 --> 404 Page Not Found: Faviconico/index
ERROR - 2017-03-30 17:46:17 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sistema2\application\controllers\Tarefa.php 424
ERROR - 2017-03-30 17:46:27 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sistema2\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-03-30 17:46:37 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sistema2\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-03-30 17:46:52 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sistema2\application\views\tarefa\form_tarefa.php 335
ERROR - 2017-03-30 17:46:52 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sistema2\application\views\tarefa\form_tarefa.php 336
ERROR - 2017-03-30 17:46:53 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_Tarefa WHERE idApp_Tarefa = arquivos
ERROR - 2017-03-30 17:47:07 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sistema2\application\controllers\Tarefa.php 424
ERROR - 2017-03-30 17:47:17 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sistema2\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-03-30 17:47:26 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sistema2\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-03-30 17:47:31 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sistema2\application\views\tarefa\form_tarefa.php 335
ERROR - 2017-03-30 17:47:31 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sistema2\application\views\tarefa\form_tarefa.php 336
ERROR - 2017-03-30 17:47:32 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_Tarefa WHERE idApp_Tarefa = arquivos
ERROR - 2017-03-30 17:48:23 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sistema2\application\controllers\Tarefa.php 424
ERROR - 2017-03-30 17:48:33 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sistema2\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-03-30 17:48:43 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sistema2\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-03-30 17:48:45 --> Severity: Notice --> Undefined index: QuitadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_orcamentopc.php 62
ERROR - 2017-03-30 17:48:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_orcamentopc.php 62
ERROR - 2017-03-30 17:48:45 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-30 17:49:08 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-30 17:49:17 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-30 17:51:16 --> Query error: Unknown column 'OT.AprovadoOrca' in 'where clause' - Invalid query: 
            SELECT
                
				PR.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                TF.AprovadoTarefa,
                TF.DataTarefa,               
				TF.QuitadoTarefa,
				TF.DataPrazoTarefa,
				TF.DataConclusao,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa
					
            FROM
                
                App_Tarefa AS TF
					LEFT JOIN App_Profissional AS PR ON PR.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					
            WHERE
                TF.idSis_Usuario = 33 AND                
				TF.idTab_Modulo = 1 AND
				OT.AprovadoOrca = "S" AND
				((TF.DataTarefa >= "2017-01-01"))   
              
            ORDER BY
                TF.ProfissionalTarefa ASC
        
ERROR - 2017-03-30 17:51:59 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-30 17:52:55 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-30 17:53:04 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-30 17:54:29 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-30 17:54:55 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-30 17:56:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND
				((TF.DataTarefa >= "2017-01-01"))   
              
            ORD' at line 24 - Invalid query: 
            SELECT
                
				PR.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                TF.AprovadoTarefa,
                TF.DataTarefa,               
				TF.QuitadoTarefa,
				TF.DataPrazoTarefa,
				TF.DataConclusao,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa
					
            FROM
                
                App_Tarefa AS TF
					LEFT JOIN App_Profissional AS PR ON PR.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					
            WHERE
                TF.idSis_Usuario = 33 AND                
				TF.idTab_Modulo = 1 AND
				() AND
				((TF.DataTarefa >= "2017-01-01"))   
              
            ORDER BY
                TF.ProfissionalTarefa ASC
        
ERROR - 2017-03-30 17:58:10 --> 404 Page Not Found: Relatorio/arquivos
