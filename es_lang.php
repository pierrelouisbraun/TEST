<?php
$Data = file_get_contents('http://challenge01.root-me.org/web-serveur/ch13/index.php');
echo base64_encode($Data);
?>
