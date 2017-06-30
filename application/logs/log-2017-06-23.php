<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-06-23 15:15:57 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:17:59 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:21:28 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:26:10 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:27:22 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:30:47 --> Severity: Notice --> Undefined index: DataFim C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 1116
ERROR - 2017-06-23 15:30:47 --> Severity: Notice --> Undefined index: DataInicio C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 1122
ERROR - 2017-06-23 15:30:48 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:32:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY
				P.NomeProfissional ASC,
				TF.AprovadoTarefa ASC,
				TF.Servic' at line 39 - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,				
				TF.ObsTarefa,
                TF.AprovadoTarefa,
                TF.DataTarefa,
				TF.QuitadoTarefa,
				TF.ServicoConcluido,
				TF.DataPrazoTarefa,
				TF.DataConclusao,
				P2.NomeProfissional AS Profissional,
				PT.idApp_Procedtarefa,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = PT.Profissional

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
					
					TF.QuitadoTarefa = "" AND 
					TF.ServicoConcluido = "" AND 
					

                 
				
				
				
				                 
            ORDER BY
				P.NomeProfissional ASC,
				TF.AprovadoTarefa ASC,
				TF.ServicoConcluido Desc,
				TF.DataPrazoTarefa ASC,
				PT.ConcluidoProcedtarefa ASC,
				PT.DataProcedtarefa ASC,														
				TF.QuitadoTarefa
				
        
ERROR - 2017-06-23 15:36:27 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:36:35 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:37:25 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:39:16 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:39:20 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:40:14 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:42:01 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:43:54 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:44:00 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:44:41 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:46:36 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:46:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:46:36 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:46:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:46:37 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:46:40 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 1134
ERROR - 2017-06-23 15:46:40 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 1134
ERROR - 2017-06-23 15:46:40 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 1135
ERROR - 2017-06-23 15:46:41 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 1135
ERROR - 2017-06-23 15:46:41 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:46:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:46:41 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:46:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:46:41 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:47:27 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:47:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:47:27 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:47:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:47:27 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:47:46 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:47:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:47:46 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:47:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:47:46 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:50:30 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:50:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:50:30 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:50:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:50:30 --> Severity: Notice --> Undefined index: DataInicio C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 191
ERROR - 2017-06-23 15:50:30 --> Severity: Notice --> Undefined index: DataFim C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 201
ERROR - 2017-06-23 15:50:31 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:50:35 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:50:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:50:35 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:50:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:50:35 --> Severity: Notice --> Undefined index: DataInicio C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 191
ERROR - 2017-06-23 15:50:35 --> Severity: Notice --> Undefined index: DataFim C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 201
ERROR - 2017-06-23 15:50:35 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:50:43 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:50:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:50:43 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:50:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:50:43 --> Severity: Notice --> Undefined index: DataInicio C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 191
ERROR - 2017-06-23 15:50:43 --> Severity: Notice --> Undefined index: DataFim C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 201
ERROR - 2017-06-23 15:50:43 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:52:25 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:52:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:52:25 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:52:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:52:26 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:52:33 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:52:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:52:33 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:52:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:52:33 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:54:01 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:54:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:54:01 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:54:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:54:02 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:54:11 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:54:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:54:11 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:54:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:54:11 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:54:26 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:54:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:54:27 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:54:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:54:27 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 15:55:14 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:55:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 15:55:14 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:55:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 15:55:15 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 16:02:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND P.idApp_Profissional = 12 
				
				
				
				                 
       ' at line 33 - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,				
				TF.ObsTarefa,
                TF.AprovadoTarefa,
                TF.DataTarefa,
				TF.QuitadoTarefa,
				TF.ServicoConcluido,
				TF.DataPrazoTarefa,
				TF.DataConclusao,
				P2.NomeProfissional AS Profissional,
				PT.idApp_Procedtarefa,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = PT.Profissional

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
					TF.AprovadoTarefa = "N" AND 

					

                 AND P.idApp_Profissional = 12 
				
				
				
				                 
            ORDER BY
				P.NomeProfissional ASC,
				TF.AprovadoTarefa ASC,
				TF.ServicoConcluido Desc,
				TF.DataPrazoTarefa ASC,
				PT.ConcluidoProcedtarefa ASC,
				PT.DataProcedtarefa ASC,														
				TF.QuitadoTarefa
				
        
ERROR - 2017-06-23 16:05:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND

                 AND P.idApp_Profissional = 12 
				
				
				
				  ' at line 31 - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,				
				TF.ObsTarefa,
                TF.AprovadoTarefa,
                TF.DataTarefa,
				TF.QuitadoTarefa,
				TF.ServicoConcluido,
				TF.DataPrazoTarefa,
				TF.DataConclusao,
				P2.NomeProfissional AS Profissional,
				PT.idApp_Procedtarefa,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = PT.Profissional

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
					TF.AprovadoTarefa = "N" AND 

					 AND

                 AND P.idApp_Profissional = 12 
				
				
				
				                 
            ORDER BY
				P.NomeProfissional ASC,
				TF.AprovadoTarefa ASC,
				TF.ServicoConcluido Desc,
				TF.DataPrazoTarefa ASC,
				PT.ConcluidoProcedtarefa ASC,
				PT.DataProcedtarefa ASC,														
				TF.QuitadoTarefa
				
        
ERROR - 2017-06-23 16:06:23 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 16:06:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 16:06:23 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 16:06:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 16:06:23 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 16:10:43 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 16:10:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 16:10:43 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 16:10:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 16:10:44 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 16:11:10 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 16:11:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 16:11:10 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 16:11:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 16:11:11 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 16:11:54 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 16:11:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 16:11:54 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 16:11:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 16:11:55 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 16:12:05 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 16:12:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 16:12:05 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 16:12:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 16:12:05 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 16:12:48 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 16:12:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 16:12:48 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 16:12:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 16:12:48 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-06-23 16:13:41 --> Severity: Notice --> Undefined index: ServicoConcluido C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 16:13:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 122
ERROR - 2017-06-23 16:13:41 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 16:13:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sistema2\application\views\relatorio\tela_tarefa.php 138
ERROR - 2017-06-23 16:13:42 --> 404 Page Not Found: Relatorio/arquivos
