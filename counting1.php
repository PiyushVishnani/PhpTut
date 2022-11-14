<?php
echo "<html>";
echo "<body>";
echo"<table align=center border=2px bgcolor= pink; border-collapse:collapse >";
for($count=0;$count<=9;$count++){
    echo "<tr>";
    echo "<br>";
    for($col=0;$col<=9;$col++){
        // echo "$count$col ";
        echo "<td  border=2px bgcolor= green; border-collapse:collapse> $count$col</td>";
    }echo"<br>";
    echo " </tr>";

}
echo "</table>";
    echo "</body>";
   
    echo " </html>";
?>