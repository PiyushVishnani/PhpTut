<?php
echo"<table style='border:6px solid black; border-collapse: collapse' align=center>";

for($row=1;$row<=8;$row++)
{

    echo "<tr>";
    echo "<br>";
    for( $col=1;$col<=8;$col++)
    {
        if(($row+$col)%2==0){
            echo "<td style='background-color:black; height:70px; width: 70px'></td>";

        }
        else{
            echo "<td style='background-color:white; height:70px; width: 70px'></td>";

        }
        
    }

    echo " </tr>";
    }

    echo "</table>";

?>