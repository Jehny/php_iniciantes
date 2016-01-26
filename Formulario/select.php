<?php

 $resultados = mysql_query("SELECT * FROM cadastro WHERE cpf=123 ")
	   or die ('Erro ao executar select.Erro:'.mysql_errno().mysql_error());

	   echo "<table>\n";
	   while ($linha = mysql_fetch_array($resultados, MYSQL_ASSOC)) {
 		echo "\t<tr>\n";
 		foreach ($linha as $valor) {
 			 echo "\t\t<tr>$valor<td>\n";
 		}

 		echo "\t<tr>\n";

	   }

	   echo "</table\n>";

	   mysql_free_result($resultados);
	   mysql_close($conexao);

?>