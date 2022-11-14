<?php
echo "<html>";
echo "<body>";
echo"<table border-collapse:collapse; align=center border=2px bgcolor= pink >";

for($count=1;$count<=10;$count++)
{

    echo "<tr>";
    echo "<br>";
    for( $col=1;$col<=10;$col++)
    {
        $number=$col*$count;
        echo "<td border-collapse:collapse; border=2px bgcolor=aquamarine> $count*$col=$number</td>";
        
    }

    echo " </tr>";
    }

    echo "</table>";
    echo "</body>";
   
    echo " </html>";

?>