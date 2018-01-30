<?php
 $recipe = $_POST['recipe'];
 $min_temp = $_POST['min_temp'];
 $max_temp = $_POST['max_temp'];
 $min_ph = $_POST['min_ph'];
 $max_ph = $_POST['max_ph'];
 $min_humid = $_POST['min_humid'];
 $max_humid = $_POST['max_humid'];
 $min_light = $_POST['min_light'];
 $max_light = $_POST['max_light'];

 $fp = fopen("formdata.txt", "a");
 $savestring = $recipe . "n" . $min_temp . " " . $max_temp . "n";
 fwrite($fp, $savestring);
 fclose($fp);
 echo "<h1>You have saved the data</h1>";
 ?>
