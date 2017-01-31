<br>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Paciente</th>
            <th>Telefone</th>
			<!--<th>Nascimento</th>-->            
        </tr>
    </thead>
    <tbody>
        <?php

        foreach ($query->result_array() as $row) {
            
            if (isset($_SESSION['agenda']))
                $url = base_url() . 'consulta/cadastrar/' . $row['idApp_Cliente'];
            else
                $url = base_url() . 'cliente/prontuario/' . $row['idApp_Cliente'];
                    
            echo '<tr class="clickable-row" data-href="' . $url . '">';
                echo '<td>' . $row['NomeCliente'] . '</td>';
                echo '<td>' . $row['Telefone1'] . '</td>';
				//echo '<td>' . $row['DataNascimento'] . '</td>';               
            echo '</tr>';            
        }
        ?>

    </tbody>
    <tfoot>
        <tr>
            <th colspan="3">Total encontrado: <?php echo $query->num_rows(); ?> resultado(s)</th>
        </tr>
    </tfoot>
</table>



