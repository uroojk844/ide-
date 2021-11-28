<?php
$txt = $_POST['text'];
$f = fopen('new.htm','w');
fwrite($f,$txt);
fclose($f);
?>