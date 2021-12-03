<?php

  $json =  file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  /*
  echo "<pre>";
  var_dump($data);
  echo "</pre>";
  */

  
 // echo "กรุณาเลือกจังหวัด : ";
  //echo "<select name='province'>"
    
  foreach ( $data as $key => $val ){
   // echo "<option>";
    //echo $key;
   // echo "</option>";
    
    echo "<pre>";
    echo $val->province;
    echo "</pre>";
  }
 // echo "</select>"
  
?>
