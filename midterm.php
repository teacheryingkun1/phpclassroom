<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<table border='1'>";
  echo "<tr>";
  echo "<td>"; 
  echo "ลำดับ";
  echo "</td>"; 
  echo "<td>"; 
  echo "จังหวัด";
  echo "</td>"; 
  echo "</tr>";
    
  foreach($data as $key=>$val){
    echo "ข้อมูลตำแหน่งที่ ".$key." : ";
    echo $val->new_case;
    echo "<br>";
  }

  echo "</table>";

?>
