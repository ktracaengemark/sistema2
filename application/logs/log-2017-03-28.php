<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-03-28 00:18:58 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 00:19:04 --> Severity: Notice --> Undefined variable: filtro2 C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 691
ERROR - 2017-03-28 00:19:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM
                App_Cliente AS C,
                App_OrcaTrata AS OT

' at line 9 - Invalid query: 
            SELECT
                C.NomeCliente,

                OT.idApp_OrcaTrata,
                OT.AprovadoOrca,
                OT.DataOrca,


            FROM
                App_Cliente AS C,
                App_OrcaTrata AS OT

            WHERE
                C.idSis_Usuario = 33 AND
                ((OT.DataOrca >= "2017-01-01")) AND
                OT.AprovadoOrca = "" AND 
                
                C.idApp_Cliente = OT.idApp_Cliente

            ORDER BY
                 
        
ERROR - 2017-03-28 00:19:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM
                App_Cliente AS C,
                App_OrcaTrata AS OT

' at line 9 - Invalid query: 
            SELECT
                C.NomeCliente,

                OT.idApp_OrcaTrata,
                OT.AprovadoOrca,
                OT.DataOrca,


            FROM
                App_Cliente AS C,
                App_OrcaTrata AS OT

            WHERE
                C.idSis_Usuario = 33 AND
                ((OT.DataOrca >= "2017-01-01")) AND
                OT.AprovadoOrca = "" AND 

                C.idApp_Cliente = OT.idApp_Cliente

            ORDER BY
                 
        
ERROR - 2017-03-28 00:20:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM
                App_Cliente AS C,
                App_OrcaTrata AS OT

' at line 9 - Invalid query: 
            SELECT
                C.NomeCliente,

                OT.idApp_OrcaTrata,
                OT.AprovadoOrca,
                OT.DataOrca,


            FROM
                App_Cliente AS C,
                App_OrcaTrata AS OT

            WHERE
                C.idSis_Usuario = 33 AND
                ((OT.DataOrca >= "2017-01-01")) AND
                OT.AprovadoOrca = "" AND 

                C.idApp_Cliente = OT.idApp_Cliente

            ORDER BY
                 
        
ERROR - 2017-03-28 00:22:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM
                App_Cliente AS C,
                App_OrcaTrata AS OT

' at line 9 - Invalid query: 
            SELECT
                C.NomeCliente,

                OT.idApp_OrcaTrata,
                OT.AprovadoOrca,
                OT.DataOrca,


            FROM
                App_Cliente AS C,
                App_OrcaTrata AS OT

            WHERE
                C.idSis_Usuario = 33 AND
                ((OT.DataOrca >= "2017-01-01")) AND               
                C.idApp_Cliente = OT.idApp_Cliente

            ORDER BY
                 
        
ERROR - 2017-03-28 00:32:03 --> Severity: Parsing Error --> syntax error, unexpected end of file, expecting function (T_FUNCTION) C:\xampp\htdocs\sistema2\application\controllers\Relatorio.php 750
ERROR - 2017-03-28 00:32:57 --> Severity: Parsing Error --> syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 662
ERROR - 2017-03-28 00:34:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM
                App_Cliente AS C


            WHERE
                C' at line 8 - Invalid query: 
            SELECT
                C.idApp_Cliente,
                C.NomeCliente,

                C.DataNascimento,
           

            FROM
                App_Cliente AS C


            WHERE
                C.idSis_Usuario = 33


            ORDER BY
                C.NomeCliente ASC
        
ERROR - 2017-03-28 00:37:44 --> Severity: Compile Error --> Cannot redeclare Relatorio::clientes() C:\xampp\htdocs\sistema2\application\controllers\Relatorio.php 695
ERROR - 2017-03-28 00:38:54 --> Severity: Compile Error --> Cannot redeclare Relatorio_model::list_clientes() C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 660
ERROR - 2017-03-28 00:39:29 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 00:46:26 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 00:47:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM
                App_Cliente AS C


            WHERE
                C' at line 12 - Invalid query: 
            SELECT
                C.idApp_Cliente,
                C.NomeCliente,

                C.DataNascimento,
                C.Telefone1,
                C.Telefone2,
                C.Telefone3,
                C.Sexo,


            FROM
                App_Cliente AS C


            WHERE
                C.idSis_Usuario = 33


            ORDER BY
                C.NomeCliente ASC
        
ERROR - 2017-03-28 00:48:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM
                App_Cliente AS C
                    LEFT JOIN Tab_Munici' at line 12 - Invalid query: 
            SELECT
                C.idApp_Cliente,
                C.NomeCliente,

                C.DataNascimento,
                C.Telefone1,
                C.Telefone2,
                C.Telefone3,
                C.Sexo,


            FROM
                App_Cliente AS C
                    LEFT JOIN Tab_Municipio AS M ON C.Municipio = M.idTab_Municipio

            WHERE
                C.idSis_Usuario = 33


            ORDER BY
                C.NomeCliente ASC
        
ERROR - 2017-03-28 00:49:11 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 00:50:26 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 00:51:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM
                App_Cliente AS C
                    LEFT JOIN Tab_Munici' at line 15 - Invalid query: 
            SELECT
                C.idApp_Cliente,
                C.NomeCliente,

                C.DataNascimento,
                C.Telefone1,
                C.Telefone2,
                C.Telefone3,
                C.Sexo,
                C.Endereco,
                C.Bairro,
                CONCAT(M.NomeMunicipio, "/", M.Uf) AS Municipio,


            FROM
                App_Cliente AS C
                    LEFT JOIN Tab_Municipio AS M ON C.Municipio = M.idTab_Municipio

            WHERE
                C.idSis_Usuario = 33


            ORDER BY
                C.NomeCliente ASC
        
ERROR - 2017-03-28 00:52:04 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 00:52:40 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 00:53:35 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 00:54:29 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 00:55:29 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 00:55:48 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 00:55:48 --> Severity: Notice --> Undefined index: idApp_ContatoProf C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 00:55:48 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 56
ERROR - 2017-03-28 00:55:48 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 00:55:48 --> Severity: Notice --> Undefined index: idApp_ContatoProf C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 00:55:48 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 56
ERROR - 2017-03-28 00:55:49 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_Cliente WHERE idApp_Cliente = arquivos
ERROR - 2017-03-28 00:55:54 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 00:57:58 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:58 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:58 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:58 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:58 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:58 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:58 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:58 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:58 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:58 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:58 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:58 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:58 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:59 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:59 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:59 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:59 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:59 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:59 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:59 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:59 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:59 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:59 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:59 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:59 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:59 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:59 --> Severity: Notice --> Undefined property: stdClass::$DataNascimento C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 698
ERROR - 2017-03-28 00:57:59 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 00:58:38 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:06:23 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:07:34 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:07:41 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 729
ERROR - 2017-03-28 01:07:41 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 730
ERROR - 2017-03-28 01:07:42 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 01:07:52 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:08:01 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 729
ERROR - 2017-03-28 01:08:01 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 730
ERROR - 2017-03-28 01:08:02 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 01:08:10 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:08:16 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 729
ERROR - 2017-03-28 01:08:16 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 730
ERROR - 2017-03-28 01:08:17 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 01:14:40 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:17:08 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 729
ERROR - 2017-03-28 01:17:08 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 730
ERROR - 2017-03-28 01:17:09 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 01:17:25 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:20:09 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:22:45 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:32:35 --> Query error: Unknown column 'TPD.Produto' in 'field list' - Invalid query: 
            SELECT
                C.idApp_Cliente,
                C.NomeCliente,
				OT.idApp_OrcaTrata,
				PD.idApp_ProdutoVenda,
				PD.QtdVendaProduto,
				TPD.Produto

            FROM
                App_Cliente AS C,
				App_OrcaTrata AS OT
				LEFT JOIN App_ProdutoVenda AS PD ON OT.idApp_OrcaTrata = PD.idApp_OrcaTrata
				LEFT JOIN Tab_Produto AS TPD ON TPD.idTab_Produto = PD.idTab_Produto
				
            WHERE
                C.idSis_Usuario = 33 AND
				C.idApp_Cliente = OT.idApp_Cliente


            ORDER BY
                C.NomeCliente ASC
        
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> Severity: Notice --> Undefined index: Produto C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 31
ERROR - 2017-03-28 01:33:35 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:34:37 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:35:23 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:35:28 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:35:33 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:35:42 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:35:53 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 01:37:16 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 729
ERROR - 2017-03-28 01:37:16 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 730
ERROR - 2017-03-28 01:37:17 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 01:45:04 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 02:24:55 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 02:25:43 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 02:25:49 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 02:26:44 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 02:26:51 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 02:29:45 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 02:31:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND
				C.idApp_Cliente = OT.idApp_Cliente


            ORDER BY
       ' at line 20 - Invalid query: 
            SELECT
                C.idApp_Cliente,
                C.NomeCliente,
				OT.idApp_OrcaTrata,
				OT.AprovadoOrca,
				PD.idApp_ProdutoVenda,
				PD.QtdVendaProduto,
				TPD.NomeProduto,
				PC.Procedimento

            FROM
                App_Cliente AS C,
				App_OrcaTrata AS OT
				LEFT JOIN App_ProdutoVenda AS PD ON OT.idApp_OrcaTrata = PD.idApp_OrcaTrata
				LEFT JOIN Tab_Produto AS TPD ON TPD.idTab_Produto = PD.idTab_Produto
				LEFT JOIN App_Procedimento AS PC ON OT.idApp_OrcaTrata = PC.idApp_OrcaTrata
				
            WHERE
                C.idSis_Usuario = 33 AND
				(OT.AprovadoOrca = "" AND ) AND
				C.idApp_Cliente = OT.idApp_Cliente


            ORDER BY
                C.NomeCliente ASC
        
ERROR - 2017-03-28 02:32:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND
				C.idApp_Cliente = OT.idApp_Cliente


            ORDER BY' at line 20 - Invalid query: 
            SELECT
                C.idApp_Cliente,
                C.NomeCliente,
				OT.idApp_OrcaTrata,
				OT.AprovadoOrca,
				PD.idApp_ProdutoVenda,
				PD.QtdVendaProduto,
				TPD.NomeProduto,
				PC.Procedimento

            FROM
                App_Cliente AS C,
				App_OrcaTrata AS OT
				LEFT JOIN App_ProdutoVenda AS PD ON OT.idApp_OrcaTrata = PD.idApp_OrcaTrata
				LEFT JOIN Tab_Produto AS TPD ON TPD.idTab_Produto = PD.idTab_Produto
				LEFT JOIN App_Procedimento AS PC ON OT.idApp_OrcaTrata = PC.idApp_OrcaTrata
				
            WHERE
                C.idSis_Usuario = 33 AND
				(OT.AprovadoOrca = "" AND ) AND
				C.idApp_Cliente = OT.idApp_Cliente


            ORDER BY
                 
        
ERROR - 2017-03-28 02:33:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 24 - Invalid query: 
            SELECT
                C.idApp_Cliente,
                C.NomeCliente,
				OT.idApp_OrcaTrata,
				OT.AprovadoOrca,
				PD.idApp_ProdutoVenda,
				PD.QtdVendaProduto,
				TPD.NomeProduto,
				PC.Procedimento

            FROM
                App_Cliente AS C,
				App_OrcaTrata AS OT
				LEFT JOIN App_ProdutoVenda AS PD ON OT.idApp_OrcaTrata = PD.idApp_OrcaTrata
				LEFT JOIN Tab_Produto AS TPD ON TPD.idTab_Produto = PD.idTab_Produto
				LEFT JOIN App_Procedimento AS PC ON OT.idApp_OrcaTrata = PC.idApp_OrcaTrata
				
            WHERE
                C.idSis_Usuario = 33 AND
				OT.AprovadoOrca = "" AND 
				C.idApp_Cliente = OT.idApp_Cliente


            ORDER BY
                 
        
ERROR - 2017-03-28 02:40:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 26 - Invalid query: 
            SELECT
                C.idApp_Cliente,
                C.NomeCliente,
				OT.idApp_OrcaTrata,
				OT.AprovadoOrca,
                OT.DataOrca,
				PD.idApp_ProdutoVenda,
				PD.QtdVendaProduto,
				TPD.NomeProduto,
				PC.Procedimento

            FROM
                App_Cliente AS C,
				App_OrcaTrata AS OT
				LEFT JOIN App_ProdutoVenda AS PD ON OT.idApp_OrcaTrata = PD.idApp_OrcaTrata
				LEFT JOIN Tab_Produto AS TPD ON TPD.idTab_Produto = PD.idTab_Produto
				LEFT JOIN App_Procedimento AS PC ON OT.idApp_OrcaTrata = PC.idApp_OrcaTrata
				
            WHERE
                C.idSis_Usuario = 33 AND
                ((OT.DataOrca >= "")) AND
                OT.AprovadoOrca = "" AND 			
                C.idApp_Cliente = OT.idApp_Cliente


            ORDER BY
                 
        
ERROR - 2017-03-28 02:42:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 26 - Invalid query: 
            SELECT
                C.idApp_Cliente,
                C.NomeCliente,
				OT.idApp_OrcaTrata,
				OT.AprovadoOrca,
                OT.DataOrca,
				PD.idApp_ProdutoVenda,
				PD.QtdVendaProduto,
				TPD.NomeProduto,
				PC.Procedimento

            FROM
                App_Cliente AS C,
				App_OrcaTrata AS OT
				LEFT JOIN App_ProdutoVenda AS PD ON OT.idApp_OrcaTrata = PD.idApp_OrcaTrata
				LEFT JOIN Tab_Produto AS TPD ON TPD.idTab_Produto = PD.idTab_Produto
				LEFT JOIN App_Procedimento AS PC ON OT.idApp_OrcaTrata = PC.idApp_OrcaTrata
				
            WHERE
                C.idSis_Usuario = 33 AND
                ((OT.DataOrca >= "")) AND
                OT.AprovadoOrca = "" AND 			
                C.idApp_Cliente = OT.idApp_Cliente


            ORDER BY
                 
        
ERROR - 2017-03-28 02:44:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 26 - Invalid query: 
            SELECT
                C.idApp_Cliente,
                C.NomeCliente,
				OT.idApp_OrcaTrata,
				OT.AprovadoOrca,
                OT.DataOrca,
				PD.idApp_ProdutoVenda,
				PD.QtdVendaProduto,
				TPD.NomeProduto,
				PC.Procedimento

            FROM
                App_Cliente AS C,
				App_OrcaTrata AS OT
				LEFT JOIN App_ProdutoVenda AS PD ON OT.idApp_OrcaTrata = PD.idApp_OrcaTrata
				LEFT JOIN Tab_Produto AS TPD ON TPD.idTab_Produto = PD.idTab_Produto
				LEFT JOIN App_Procedimento AS PC ON OT.idApp_OrcaTrata = PC.idApp_OrcaTrata
				
            WHERE
                C.idSis_Usuario = 33 AND
                ((OT.DataOrca >= "")) AND
                OT.AprovadoOrca = "" AND 			
                C.idApp_Cliente = OT.idApp_Cliente


            ORDER BY
                 
        
ERROR - 2017-03-28 02:50:03 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 664
ERROR - 2017-03-28 02:50:03 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 664
ERROR - 2017-03-28 02:50:04 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 02:50:56 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:56 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:56 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:56 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:56 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:56 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:56 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:56 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:56 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:57 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:58 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:59 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:59 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:59 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:59 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:59 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:59 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:59 --> Severity: Notice --> Undefined index: Procedimento C:\xampp\htdocs\sistema2\application\views\relatorio\list_clienteprod.php 34
ERROR - 2017-03-28 02:50:59 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 02:53:25 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 02:59:14 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:06:26 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away C:\xampp\htdocs\sistema2\system\database\drivers\mysqli\mysqli_driver.php 133
ERROR - 2017-03-28 03:06:27 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:07:04 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:08:01 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:08:10 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:08:17 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:09:44 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 729
ERROR - 2017-03-28 03:09:44 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 730
ERROR - 2017-03-28 03:09:45 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 03:11:38 --> Severity: Notice --> Undefined index: agenda C:\xampp\htdocs\sistema2\application\controllers\Cliente.php 329
ERROR - 2017-03-28 03:11:39 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 03:11:39 --> Severity: Notice --> Undefined index: idApp_ContatoProf C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 03:11:39 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 56
ERROR - 2017-03-28 03:11:40 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_Cliente WHERE idApp_Cliente = arquivos
ERROR - 2017-03-28 03:11:49 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT OT.idApp_OrcaTrata, OT.DataOrca, OT.ProfissionalOrca, OT.AprovadoOrca, OT.ObsOrca FROM App_OrcaTrata AS OT WHERE OT.idApp_Cliente = arquivos AND OT.AprovadoOrca = "S" ORDER BY OT.DataOrca DESC 
ERROR - 2017-03-28 03:11:58 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 729
ERROR - 2017-03-28 03:11:58 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 730
ERROR - 2017-03-28 03:11:59 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 03:12:12 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT OT.idApp_OrcaTrata, OT.DataOrca, OT.ProfissionalOrca, OT.AprovadoOrca, OT.ObsOrca FROM App_OrcaTrata AS OT WHERE OT.idApp_Cliente = arquivos AND OT.AprovadoOrca = "S" ORDER BY OT.DataOrca DESC 
ERROR - 2017-03-28 03:12:17 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 729
ERROR - 2017-03-28 03:12:17 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 730
ERROR - 2017-03-28 03:12:18 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 03:14:05 --> 404 Page Not Found: Servico/arquivos
ERROR - 2017-03-28 03:14:53 --> 404 Page Not Found: Servico/arquivos
ERROR - 2017-03-28 03:15:01 --> Severity: Notice --> Undefined index: agenda C:\xampp\htdocs\sistema2\application\controllers\Cliente.php 329
ERROR - 2017-03-28 03:15:02 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 03:15:02 --> Severity: Notice --> Undefined index: idApp_ContatoProf C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 03:15:02 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 56
ERROR - 2017-03-28 03:15:03 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_Cliente WHERE idApp_Cliente = arquivos
ERROR - 2017-03-28 03:15:08 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT OT.idApp_OrcaTrata, OT.DataOrca, OT.ProfissionalOrca, OT.AprovadoOrca, OT.ObsOrca FROM App_OrcaTrata AS OT WHERE OT.idApp_Cliente = arquivos AND OT.AprovadoOrca = "S" ORDER BY OT.DataOrca DESC 
ERROR - 2017-03-28 03:15:14 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 729
ERROR - 2017-03-28 03:15:14 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 730
ERROR - 2017-03-28 03:15:15 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 03:26:36 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 774
ERROR - 2017-03-28 03:26:36 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 775
ERROR - 2017-03-28 03:26:37 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 03:27:11 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sistema2\application\controllers\Orcatrata.php 785
ERROR - 2017-03-28 03:27:13 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT OT.idApp_OrcaTrata, OT.DataOrca, OT.DataPrazo, OT.ProfissionalOrca, OT.AprovadoOrca, OT.ObsOrca FROM App_OrcaTrata AS OT WHERE OT.idApp_Cliente = arquivos AND OT.AprovadoOrca = "S" ORDER BY OT.DataOrca DESC 
ERROR - 2017-03-28 03:27:24 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 774
ERROR - 2017-03-28 03:27:25 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 775
ERROR - 2017-03-28 03:27:25 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 03:27:54 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:36:07 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\controllers\Relatorio.php 735
ERROR - 2017-03-28 03:36:07 --> Severity: Notice --> Undefined index: ConcluidoProcedimento C:\xampp\htdocs\sistema2\application\controllers\Relatorio.php 736
ERROR - 2017-03-28 03:36:08 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:36:52 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:37:17 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:45:35 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:50:44 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 664
ERROR - 2017-03-28 03:50:44 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 664
ERROR - 2017-03-28 03:50:44 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:50:44 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:50:44 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:50:45 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:55:43 --> Severity: Notice --> Undefined variable: filtro1 C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 686
ERROR - 2017-03-28 03:55:43 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:55:44 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:55:44 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:55:44 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:56:33 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away C:\xampp\htdocs\sistema2\system\database\drivers\mysqli\mysqli_driver.php 133
ERROR - 2017-03-28 03:56:34 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:56:34 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:56:34 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:56:34 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:57:22 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:57:22 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:57:22 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:57:23 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:57:32 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:57:32 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:57:32 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:57:32 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:59:33 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:59:33 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:59:33 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:59:34 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 03:59:39 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:59:39 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:59:39 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 03:59:39 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 04:00:01 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:00:01 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:00:02 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:00:02 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 04:01:13 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\controllers\Relatorio.php 741
ERROR - 2017-03-28 04:01:13 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:01:13 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:01:13 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:01:13 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 04:02:07 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\controllers\Relatorio.php 741
ERROR - 2017-03-28 04:02:07 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:02:07 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:02:07 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:02:07 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 04:02:18 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 664
ERROR - 2017-03-28 04:02:18 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\models\Relatorio_model.php 664
ERROR - 2017-03-28 04:02:18 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:02:18 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:02:18 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:02:18 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 04:03:09 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:03:09 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:03:09 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:03:09 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 04:03:20 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:03:20 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:03:20 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:03:20 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 04:03:30 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:03:30 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:03:30 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:03:30 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 04:04:09 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 774
ERROR - 2017-03-28 04:04:09 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 775
ERROR - 2017-03-28 04:04:10 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 04:04:37 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sistema2\application\controllers\Orcatrata.php 785
ERROR - 2017-03-28 04:04:39 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT OT.idApp_OrcaTrata, OT.DataOrca, OT.DataPrazo, OT.ProfissionalOrca, OT.AprovadoOrca, OT.ObsOrca FROM App_OrcaTrata AS OT WHERE OT.idApp_Cliente = arquivos AND OT.AprovadoOrca = "S" ORDER BY OT.DataOrca DESC 
ERROR - 2017-03-28 04:04:46 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:04:46 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:04:46 --> Severity: Notice --> Undefined index: AprovadoOrca C:\xampp\htdocs\sistema2\application\views\relatorio\tela_clienteprod.php 25
ERROR - 2017-03-28 04:04:46 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 04:25:56 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 774
ERROR - 2017-03-28 04:25:56 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 775
ERROR - 2017-03-28 04:25:57 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 11:39:15 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sistema2\application\views\tarefa\form_tarefa.php 332
ERROR - 2017-03-28 11:39:16 --> 404 Page Not Found: Tarefa/arquivos
ERROR - 2017-03-28 11:40:09 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sistema2\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-03-28 11:40:09 --> 404 Page Not Found: Tarefa/arquivos
ERROR - 2017-03-28 12:41:25 --> 404 Page Not Found: Tarefa/arquivos
ERROR - 2017-03-28 14:37:44 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sistema2\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-03-28 14:37:45 --> 404 Page Not Found: Tarefa/arquivos
ERROR - 2017-03-28 14:43:06 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 14:43:10 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 14:43:10 --> Severity: Notice --> Undefined index: idApp_ContatoProf C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 14:43:11 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 56
ERROR - 2017-03-28 14:43:11 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 14:43:11 --> Severity: Notice --> Undefined index: idApp_ContatoProf C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 14:43:11 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 56
ERROR - 2017-03-28 14:43:12 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_Cliente WHERE idApp_Cliente = arquivos
ERROR - 2017-03-28 14:43:12 --> 404 Page Not Found: Faviconico/index
ERROR - 2017-03-28 14:43:18 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT OT.idApp_OrcaTrata, OT.DataOrca, OT.DataPrazo, OT.ProfissionalOrca, OT.AprovadoOrca, OT.ObsOrca FROM App_OrcaTrata AS OT WHERE OT.idApp_Cliente = arquivos AND OT.AprovadoOrca = "S" ORDER BY OT.DataOrca DESC 
ERROR - 2017-03-28 14:43:23 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 776
ERROR - 2017-03-28 14:43:23 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 777
ERROR - 2017-03-28 14:43:24 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 14:49:59 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 907
ERROR - 2017-03-28 14:49:59 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 908
ERROR - 2017-03-28 14:50:00 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 14:50:56 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 775
ERROR - 2017-03-28 14:50:56 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 776
ERROR - 2017-03-28 14:50:57 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 14:56:18 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 14:56:21 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 14:56:21 --> Severity: Notice --> Undefined index: idApp_ContatoProf C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 14:56:21 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 56
ERROR - 2017-03-28 14:56:21 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 14:56:21 --> Severity: Notice --> Undefined index: idApp_ContatoProf C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 14:56:22 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 56
ERROR - 2017-03-28 14:56:23 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_Cliente WHERE idApp_Cliente = arquivos
ERROR - 2017-03-28 14:56:28 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT OT.idApp_OrcaTrata, OT.DataOrca, OT.DataPrazo, OT.ProfissionalOrca, OT.AprovadoOrca, OT.ObsOrca FROM App_OrcaTrata AS OT WHERE OT.idApp_Cliente = arquivos AND OT.AprovadoOrca = "S" ORDER BY OT.DataOrca DESC 
ERROR - 2017-03-28 14:56:33 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 776
ERROR - 2017-03-28 14:56:33 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 777
ERROR - 2017-03-28 14:56:34 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 14:59:10 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 770
ERROR - 2017-03-28 14:59:10 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 771
ERROR - 2017-03-28 14:59:11 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:00:59 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 771
ERROR - 2017-03-28 15:00:59 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 772
ERROR - 2017-03-28 15:01:00 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:03:38 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 771
ERROR - 2017-03-28 15:03:38 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 772
ERROR - 2017-03-28 15:03:39 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:06:04 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sistema2\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-03-28 15:06:05 --> 404 Page Not Found: Tarefa/arquivos
ERROR - 2017-03-28 15:07:30 --> 404 Page Not Found: Relatorio/arquivos
ERROR - 2017-03-28 15:07:33 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 15:07:33 --> Severity: Notice --> Undefined index: idApp_ContatoProf C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 15:07:33 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 56
ERROR - 2017-03-28 15:07:33 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 15:07:33 --> Severity: Notice --> Undefined index: idApp_ContatoProf C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 15:07:33 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 56
ERROR - 2017-03-28 15:07:34 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_Cliente WHERE idApp_Cliente = arquivos
ERROR - 2017-03-28 15:07:38 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT OT.idApp_OrcaTrata, OT.DataOrca, OT.DataPrazo, OT.ProfissionalOrca, OT.AprovadoOrca, OT.ObsOrca FROM App_OrcaTrata AS OT WHERE OT.idApp_Cliente = arquivos AND OT.AprovadoOrca = "S" ORDER BY OT.DataOrca DESC 
ERROR - 2017-03-28 15:07:42 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 771
ERROR - 2017-03-28 15:07:42 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 772
ERROR - 2017-03-28 15:07:43 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:13:15 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 772
ERROR - 2017-03-28 15:13:15 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 773
ERROR - 2017-03-28 15:13:16 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:19:18 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 774
ERROR - 2017-03-28 15:19:18 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 775
ERROR - 2017-03-28 15:19:19 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:25:20 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 764
ERROR - 2017-03-28 15:25:20 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 765
ERROR - 2017-03-28 15:25:21 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:26:14 --> 404 Page Not Found: Cliente/arquivos
ERROR - 2017-03-28 15:26:17 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 15:26:18 --> Severity: Notice --> Undefined index: idApp_ContatoProf C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 15:26:18 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 56
ERROR - 2017-03-28 15:26:18 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 15:26:18 --> Severity: Notice --> Undefined index: idApp_ContatoProf C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 15:26:18 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 56
ERROR - 2017-03-28 15:26:19 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_Cliente WHERE idApp_Cliente = arquivos
ERROR - 2017-03-28 15:26:23 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT OT.idApp_OrcaTrata, OT.DataOrca, OT.DataPrazo, OT.ProfissionalOrca, OT.AprovadoOrca, OT.ObsOrca FROM App_OrcaTrata AS OT WHERE OT.idApp_Cliente = arquivos AND OT.AprovadoOrca = "S" ORDER BY OT.DataOrca DESC 
ERROR - 2017-03-28 15:26:27 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 764
ERROR - 2017-03-28 15:26:27 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 765
ERROR - 2017-03-28 15:26:28 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:32:50 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 769
ERROR - 2017-03-28 15:32:50 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 770
ERROR - 2017-03-28 15:32:51 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:33:56 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 769
ERROR - 2017-03-28 15:33:56 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 770
ERROR - 2017-03-28 15:33:56 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:35:35 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 769
ERROR - 2017-03-28 15:35:35 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 770
ERROR - 2017-03-28 15:35:36 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:36:26 --> Severity: Notice --> Undefined index: agenda C:\xampp\htdocs\sistema2\application\controllers\Cliente.php 329
ERROR - 2017-03-28 15:36:27 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 15:36:27 --> Severity: Notice --> Undefined index: idApp_ContatoProf C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 15:36:27 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 56
ERROR - 2017-03-28 15:36:27 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 15:36:27 --> Severity: Notice --> Undefined index: idApp_ContatoProf C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 53
ERROR - 2017-03-28 15:36:27 --> Severity: Notice --> Undefined index: idApp_Profissional C:\xampp\htdocs\sistema2\application\views\contatocliente\list_contatocliente.php 56
ERROR - 2017-03-28 15:36:28 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_Cliente WHERE idApp_Cliente = arquivos
ERROR - 2017-03-28 15:36:33 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT OT.idApp_OrcaTrata, OT.DataOrca, OT.DataPrazo, OT.ProfissionalOrca, OT.AprovadoOrca, OT.ObsOrca FROM App_OrcaTrata AS OT WHERE OT.idApp_Cliente = arquivos AND OT.AprovadoOrca = "S" ORDER BY OT.DataOrca DESC 
ERROR - 2017-03-28 15:36:38 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 769
ERROR - 2017-03-28 15:36:38 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 770
ERROR - 2017-03-28 15:36:39 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:38:28 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 766
ERROR - 2017-03-28 15:38:28 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 767
ERROR - 2017-03-28 15:38:29 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:39:57 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 766
ERROR - 2017-03-28 15:39:57 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 767
ERROR - 2017-03-28 15:39:58 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:41:52 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 770
ERROR - 2017-03-28 15:41:52 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 771
ERROR - 2017-03-28 15:41:53 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:43:39 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 769
ERROR - 2017-03-28 15:43:39 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 770
ERROR - 2017-03-28 15:43:40 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:45:00 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 768
ERROR - 2017-03-28 15:45:00 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 769
ERROR - 2017-03-28 15:45:01 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:47:23 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 768
ERROR - 2017-03-28 15:47:23 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 769
ERROR - 2017-03-28 15:47:24 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:48:28 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 768
ERROR - 2017-03-28 15:48:28 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 769
ERROR - 2017-03-28 15:48:29 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:56:08 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 909
ERROR - 2017-03-28 15:56:08 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 910
ERROR - 2017-03-28 15:56:09 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:57:27 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 772
ERROR - 2017-03-28 15:57:27 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 773
ERROR - 2017-03-28 15:57:28 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 15:59:26 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 773
ERROR - 2017-03-28 15:59:26 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 774
ERROR - 2017-03-28 15:59:27 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 16:07:19 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 783
ERROR - 2017-03-28 16:07:19 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 784
ERROR - 2017-03-28 16:07:20 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 16:16:31 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 773
ERROR - 2017-03-28 16:16:32 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 774
ERROR - 2017-03-28 16:16:32 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 16:16:56 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 773
ERROR - 2017-03-28 16:16:56 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 774
ERROR - 2017-03-28 16:16:57 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 16:17:10 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sistema2\application\controllers\Orcatrata.php 785
ERROR - 2017-03-28 16:17:12 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT OT.idApp_OrcaTrata, OT.DataOrca, OT.DataPrazo, OT.ProfissionalOrca, OT.AprovadoOrca, OT.ObsOrca FROM App_OrcaTrata AS OT WHERE OT.idApp_Cliente = arquivos AND OT.AprovadoOrca = "S" ORDER BY OT.DataOrca DESC 
ERROR - 2017-03-28 16:17:16 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 773
ERROR - 2017-03-28 16:17:16 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sistema2\application\views\orcatrata\form_orcatrata.php 774
ERROR - 2017-03-28 16:17:17 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT * FROM App_OrcaTrata WHERE idApp_OrcaTrata = arquivos
ERROR - 2017-03-28 16:17:26 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sistema2\application\controllers\Orcatrata.php 785
ERROR - 2017-03-28 16:17:28 --> Query error: Unknown column 'arquivos' in 'where clause' - Invalid query: SELECT OT.idApp_OrcaTrata, OT.DataOrca, OT.DataPrazo, OT.ProfissionalOrca, OT.AprovadoOrca, OT.ObsOrca FROM App_OrcaTrata AS OT WHERE OT.idApp_Cliente = arquivos AND OT.AprovadoOrca = "S" ORDER BY OT.DataOrca DESC 
