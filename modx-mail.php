<?php
$myfile=fopen("names.txt", "w") or die("не удалось создать файл");

$txt = "привет мир";
fwrite($myfile, $txt);

fclose($myfile);
?>
