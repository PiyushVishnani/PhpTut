<?php
class gla{
    private $msg=28;
    private function display(){
        echo $this->msg;
    }
}
    // $obj=new gla();
    // $obj->display();

    $new_obj=new ReflectionMethod('gla','display');
    $new_obj->setAccessible(true);
    $new_obj->invoke(new gla);
    echo "<br>";
    $new_obj1=new ReflectionProperty('gla','msg');
    $new_obj1->setAccessible(true);
    echo $new_obj1->getValue(new gla);

?>