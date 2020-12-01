<?php
$archivo= "visitas.txt";
$contador = 0;
$fp = fopen($archivo,"r");
$contador = fgets($fp);
fclose($fp);
++$contador;
$fp = fopen ($archivo,"w+");
fwrite($fp, $contador);
fclose($fp);
//echo "Esta Pagina Ha Sido Visitada $contador Veces";
//echo "<br>";
//echo "<br>";
?>