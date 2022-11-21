<?php
echo "<form action=$_SERVER[PHP_SELF] method='post'>
<label>Enter numerator</label><input type='number' name='num'><br>
<label>Enter denominator</label><input type='number' name='deno'><br>
<input type='submit' name='result'>";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $num = $_POST['num'];
    $deno = $_POST['deno'];
    
    class NumeratorIsGreater extends Exception{
        function errorMessage(){
            return $this->getMessage();
        }
    }
    class NumeratorIsNegative extends Exception{
        
    }
    class NumeratorIsZero extends Exception{
        
    }
    try{
        if($deno==0){
            throw new NumeratorIsZero("Please provide a valid denominator");
        }
    }catch(NumeratorIsZero $e){
            $e->getMessage(); 
    }
    
}
?>