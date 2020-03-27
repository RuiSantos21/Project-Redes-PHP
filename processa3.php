<?php
$titulo = $_GET["titulo"];
$pweb = $_GET["pweb"];
$data = $_GET["data"];
 ?>

 <html>
   <body>
     <h3>Dados Recebidos</h3>
     <?php
      echo "Titulo: " .$titulo. "<br />";
      echo "Endereço Web: " .$pweb. "<br />";
      echo "Data de Lançamento: " .$data. "<br />";
      ?>
   </body>
 </html>
