<?php
class gla{
public $exam="endterm";
private $result="pass";
protected $grade='A';
// to access private method in its class $THIS keyword is used
public function conduct_exam(){

}
private function exam(){
    
}
        
}
$stu_gla=new gla; // () are not required 
$stu_two_gla=new gla();
echo $stu_gla->exam="midterm";
echo "<br>";
echo $stu_two_gla->exam;
echo "<br>";
echo $stu_gla->exam;
// to access private method outside the class
/* reflectionmethod();
 setaccessible(TRUE);
 invoke(); */
// we can also use getters and setters
?>