<br>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Servi�o</th>
            
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i=0;
        if ($q) {

            foreach ($q as $row)
            {

                $url = base_url() . 'tipodespesa/alterar/' . $row['idTab_TipoDespesa'];
                #$url = '';

                echo '<tr class="clickable-row" data-href="' . $url . '">';
                    echo '<td>' . $row['TipoDespesa'] . '</td>';
                    #echo '<td>' . str_replace('.',',',$row['ValorVenda']) . '</td>';
                    echo '<td></td>';
                echo '</tr>';            

                $i++;
            }
            
        }
        ?>

    </tbody>
    <tfoot>
        <tr>
            <th colspan="3">Total encontrado: <?php echo $i; ?> resultado(s)</th>
        </tr>
    </tfoot>
</table>



