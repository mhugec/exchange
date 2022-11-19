<?php

  $url = file_get_contents('https://nbs.sk/export/sk/exchange-rate/latest/xml');
  $xml =  new SimpleXMLElement($url) ;

  echo $xml->Cube->Cube->Cube[3]['rate'];

    echo '<pre>';
    print_r( $xml->Cube->Cube->Cube[3]['rate'] );
    echo '</pre>';

?>

<?php
    $czkurz=$xml->Cube->Cube->Cube[3]['rate'];
    echo "<h1><center>";
    echo "Suma v " . $_GET["suma"] / $czkurz . " €"; 
    echo "</h1></center>";
?>
