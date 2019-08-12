<?php
# Delimitado barras, pontos ou traços
$data = "04/30/1973"; # Data qualquer (04-30-1973 - 04.30.1973)
list ( $mes, $dia, $ano ) = split ( '[/.-]', $data );
echo "Mês: $mes; Dia: $dia; Ano: $ano<br />\n";
?>
