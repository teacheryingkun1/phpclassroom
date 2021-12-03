<?php
 
  $json =  file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

  echo "<table border='1'>";

  echo "<tr>";
  echo "<td>ลำดับ</td>";
  echo "<td>จังหวัด</td>";
  echo "</tr>";

  foreach ( $data as $key => $val ){
    echo "<tr>";
    echo "<td>".$key."</td>";
    echo "<td>".$val->province."</td>";
    echo "</tr>";
  }

  echo "</table>";
?>
