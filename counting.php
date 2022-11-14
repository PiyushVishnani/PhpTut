<?php
echo "<html>";
echo "<body>";
echo"<table align=center border=2px bgcolor= pink >";
$num=1;
for($count=1;$count<=10;$count++){
    echo "<tr>";
    for($col=1;$col<=10;$col++){
    echo "<td  border=2px bgcolor= aquamarine> $num</td>";
    $num++;
    }
    echo "</tr>";
}
echo "</table>";
    echo "</body>";
   
    echo " </html>";

?>