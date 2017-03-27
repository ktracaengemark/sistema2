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
