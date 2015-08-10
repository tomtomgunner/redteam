<?php
$file = fopen('log.txt', 'a');
$time = date('H:i dS F');
fwrite($file, "Time: $time" . "\r\n");
fwrite( $file, "Ip Address: " . $_SERVER['REMOTE_ADDR'] . "\r\n");
fwrite($file, "Referer: " . $_SERVER['HTTP_REFERER'] . "\r\n");
fwrite( $file, "Browser: " . $_SERVER['HTTP_USER_AGENT'] . "\r\n");
fwrite( $file, "------------------------------------------------------------------------------------------------------------------" . "\r\n");
fclose( $file );
?>
