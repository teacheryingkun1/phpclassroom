<?php
  $link = array("https://lomsak.ac.th", "https://pks.ac.th", "http://www.wk.ac.th","https://www.lkp.ac.th");
  $ran_link = $link[rand(0,3)];
  header( "location: ".$ran_link);
  exit(0);
?>
