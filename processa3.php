<?php
$titulo = $_POST["titulo"];
$pweb = $_POST["pweb"];
$data = $_POST["data"];
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
