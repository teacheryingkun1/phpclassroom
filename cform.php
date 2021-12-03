<?php

  $json =  file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "กรุณาเลือกจังหวัด : ";
  echo "<select name='province'>";
    
  foreach ( $data as $key => $val ){
    echo "<option>";
    echo $val->province;
    echo "</option>";
  }
  
?>
