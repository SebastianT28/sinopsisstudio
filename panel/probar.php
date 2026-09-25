<?php 

$titulos = $_POST['type_project'];

$total = count($titulos);



for($i=0; $i < $total; $i++)

    {

      //echo($titulos[$i].",");

      $result = implode(", ", $titulos);

    }

echo $result;

?>
