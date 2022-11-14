<?php
class Glau{
    public $exam='end';
    public function __construct()
    {
        $this->exam='new';        
    }
    public function __destruct()
    {
        echo "destructor aya";
    }
}
$abc=new Glau;
$obj_two=new Glau();
echo $abc->exam;
$abc-> __construct();
?>