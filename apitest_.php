<?php
 
  $json =  file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

  echo $data[0]->province;
  
  /*
  echo "<pre>";
  var_dump($data);
  echo "</pre>";
  */
?>
