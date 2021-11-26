<?php
  $homepage = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
  var_dump(json_decode($homepage));
?>
