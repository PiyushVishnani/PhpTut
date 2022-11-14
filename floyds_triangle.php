<?php
echo "<html>";
echo "<body>";
echo"<table align=center>";
$num=1;
for($count=1;$count<=5;$count++){
    echo "<tr>";
    echo "<br>";
    for($col=1;$col<=$count;$col++){
        // echo "$num ";
        echo "<td  border=2px bgcolor= green> $num</td>";
        $num++;
    }
    echo "<br>";
    echo " </tr>";

}
echo "</table>";
    echo "</body>";
   
    echo " </html>";


?>