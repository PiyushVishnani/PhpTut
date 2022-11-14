<?php
class test{
    public $num;
    public $count;
    public function __construct(int $val_one, int $val_two)
    {
        echo ($this->init(30)."Class");
        $this->count=$val_one;
    }
    public function init($data){
        echo ("Welcome");
        $this->num=$data;
    }
    public function __destruct()
    {
        echo $this->num + $this->
    }
}
$obj_test_one=new test(40,30,40);
?>