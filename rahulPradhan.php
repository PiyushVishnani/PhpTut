<?php
for($i=1;$i<=150;$i++){
    if($i%3==0 && $i%5==0){
        echo "rahulPradhan ";
    }
    elseif($i%5==0){
        echo "pradhan ";
    }
    elseif($i%3==0){
        echo "rahul ";
    }
    else{
        echo "$i ";
    }
}
mysqli_fetch_assoc()
?>