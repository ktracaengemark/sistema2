<div class="panel panel-default">
    <div class="panel-body">

		<div class="col-md-1"></div>
        <div class="col-md-3">
            <label for="DataFim">Total dos Or�amentos:</label>
            <div class="input-group">
                <span class="input-group-addon">R$</span>
                <input type="text" class="form-control" disabled aria-label="Total Orcamentos" value="<?php echo $report->soma->somaorcamento ?>">
            </div>
        </div>
		<div class="col-md-3">
            <label for="DataFim">Total dos Descontos:</label>
            <div class="input-group">
                <span class="input-group-addon">R$</span>
                <input type="text" class="form-control" disabled aria-label="Total Descontos" value="<?php echo $report->soma->somadesconto ?>">
            </div>
        </div>
		<div class="col-md-3">
            <label for="DataFim">Total A Receber:</label>
            <div class="input-group">
                <span class="input-group-addon">R$</span>
                <input type="text" class="form-control" disabled aria-label="Total Restante" value="<?php echo $report->soma->somarestante ?>">
            </div>
        </div>
		<div class="col-md-1"></div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div>
			<table class="table table-bordered table-condensed table-striped">	
				<tfoot>
                    <tr>
                        <th colspan="3" class="active">Total encontrado: <?php echo $report->num_rows(); ?> resultado(s)</th>
                    </tr>
                </tfoot>
			</table>		
            <table class="table table-bordered table-condensed table-striped">
                <thead>
                    <tr>
						
						<th class="active">Cliente</th>
						<th class="active">Or�.</th>						                                               
                        <th class="active">Data do Or�.</th>
						<!--<th class="active">Valid. do Or�am.</th>
						<th class="active">Prazo de Entrega</th>-->						
                        <th class="active">Valor do Or�amen.</th>
						<th class="active">Valor do Desconto</th>
						<th class="active">Valor A Receber</th>
						<th class="active">Forma de Pag.</th>
						<th class="active">Or�. Apv.?</th>
						<th class="active">Or�. Quit.?</th>
                        <th class="active">Srv/Prd Entreg.?</th>
                        <th class="active">Data Entrega</th>
                        <th class="active">Data Retorno</th>
                        <th class="active">Profissional</th>						
                    </tr>
                </thead>
				<tbody>
                    <?php
                    foreach ($report->result_array() as $row) {
                        #echo '<tr>';
                        echo '<tr class="clickable-row" data-href="' . base_url() . 'orcatrata/alterar/' . $row['idApp_OrcaTrata'] . '">';
                            
							echo '<td>' . $row['NomeCliente'] . '</td>'; 
							echo '<td>' . $row['idApp_OrcaTrata'] . '</td>';                                                     
                            echo '<td>' . $row['DataOrca'] . '</td>';
							#echo '<td>' . $row['DataEntradaOrca'] . '</td>';
							#echo '<td>' . $row['DataPrazo'] . '</td>';
                            echo '<td class="text-left">R$ ' . $row['ValorOrca'] . '</td>';
							echo '<td class="text-left">R$ ' . $row['ValorEntradaOrca'] . '</td>';
							echo '<td class="text-left">R$ ' . $row['ValorRestanteOrca'] . '</td>';
							echo '<td>' . $row['FormaPag'] . '</td>';
							echo '<td>' . $row['AprovadoOrca'] . '</td>';
							echo '<td>' . $row['QuitadoOrca'] . '</td>';
                            echo '<td>' . $row['ServicoConcluido'] . '</td>';
                            echo '<td>' . $row['DataConclusao'] . '</td>';
                            echo '<td>' . $row['DataRetorno'] . '</td>';
							echo '<td>' . $row['Nome'] . '</td>';							
                        echo '</tr>';
                    }
                    ?>
                </tbody>
                
            </table>
        </div>
    </div>
</div>