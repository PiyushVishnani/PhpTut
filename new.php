<?php
$name="piyush' vishnani";
echo $name;
// $name2="254654165";
echo "<br>";
echo addcslashes($name,"v");
echo "<br>";
echo chr(65);
echo "<br>";

var_dump($name);
echo "<br>";
echo strchr(strrev($name),"pi");
echo substr($name,5,3);
?>