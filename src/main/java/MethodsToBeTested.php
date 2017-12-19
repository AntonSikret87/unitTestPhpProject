<?php
class MethodsToBeTested{

    public function power($x, $y){
        return pow($x, $y);
    }
    public function divide($x, $y)
    {
        if (!(boolean)$y)
        {
        throw new Exception('Division by zero');
        }
        return $x / $y;
    }
    public function doSomething(){
// Do something.
        $this->doSomethingAnother();
    }
    public function doSomethingAnother(){
// Do something.
    }
}
?>