<?php
  $link = array("https://docs.google.com/forms/d/e/1FAIpQLSfljci_TD_0cfZlQn9OP8Ut3ooVPt1f_MBVK_J_jJYY4WJhPQ/viewform?usp=sf_link",
"https://docs.google.com/forms/d/e/1FAIpQLSez9xuKvvFTey-RhVEWwt2VOZUtSn0OVDqd4742LcerNn-Ykw/viewform?usp=sf_link",
"https://docs.google.com/forms/d/e/1FAIpQLScThcTXLf-4d8QJYQ6n5GMx6R-Wko109CpD_hL75glsczDSNg/viewform?usp=sf_link",
"https://docs.google.com/forms/d/e/1FAIpQLSdUW6uI1Uz7zzhIO7GOTat1b4ZZ5MxvDHgmpVWn9sHmsmx1YA/viewform?usp=sf_link",
"https://docs.google.com/forms/d/e/1FAIpQLScjpJjl5KHX4tEk2TnCW5al5pyHhEu0TwIcoLtpSA0hjkJMxA/viewform?usp=sf_link",
"https://docs.google.com/forms/d/e/1FAIpQLSdvhZPeU93Y0OOIu_Rw-IBGt-THGgObbGQgzgJXdYVSobOjYw/viewform?usp=sf_link");
  $ran_link = $link[rand(0,3)];
  header( "location: ".$ran_link);
  exit(0);
?>
