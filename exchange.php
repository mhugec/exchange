<html>
<body>
<style>
@import url('https://fonts.googleapis.com/css?family=Nunito');

:root {
  --start-color: #0575E6;
  --end-color: #021B79;
  --p-color: #929DA6;
  --button-background: #0575E6;
  --input-background: #e4eff8;
  --radius-50: 50px;
  --padding-15: 15px;
}

body {
  margin: 0;
  padding: 0;
  height: 100vh;
  background: var(--start-color);
  background: linear-gradient(to right, var(--start-color), var(--end-color)) no-repeat;
  font-family: 'Nunito', sans-serif;
}

h1 {
    color: white;
}

.wrapper {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.wrapper .content {
  background: #fff;
  padding: 40px;
  width: 100%;
  max-width: 500px;
  min-width: 200px;
  border-radius: 10px;
  text-align: center;
}

.wrapper .content header h1 {
  font-size: 230%;
  margin-top: 0;
}
.wrapper .content section {
  color: var(--p-color);
  font-size: 15px;
}
.wrapper .content footer {
  padding: var(--padding-15);
}
.wrapper .content footer input {
  border: unset;
  background-color: var(--input-background);
  padding: var(--padding-15);
  font-size: 13px;
  border-radius: var(--radius-50);
  width: 250px;
}
.wrapper .content footer button {
  background-color: var(--button-background);
  color: #fff;
  border: unset;
  width: 120px;
  border-radius: var(--radius-50);
  padding: var(--padding-15);
  margin-left: 10px;
  cursor: pointer;
}

.wrapper .content footer input:focus, .wrapper .content footer button:focus {
  outline: none;
}

@media screen and (max-width: 720px) {
  .wrapper .content {
    margin-right: 20px !important;
    margin-left: 20px !important;
    padding: var(--padding-15);
  }
  .wrapper .content footer input {
    width: 200px;
    margin-bottom: 10px;
  }
}
</style>




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
    echo "Dyg na eura " . $_GET["suma"] / $czkurz . " €"; 
    echo "</h1></center>";

?>

</body>
</html> 