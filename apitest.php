<?php
  $data = json_decode(file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all'));
 /*
  echo '<pre>';
  var_dump(json_decode($homepage));
  echo '</pre>';
*/
  echo $data[0]["txn_date"];
?>
