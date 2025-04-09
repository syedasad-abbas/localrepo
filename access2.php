<?php
class fruit{
    public $name;
    public $color;
    public function __construct($name , $color){
        if (empty($name) || empty($color)) {
            throw new Exception("Name and color must not be empty.");
        }
        $this->name=$name ;
        $this->color=$color;
    }
    public function intro(){
        echo "the fruit is {$this->name} and the color is {$this->color}";

    }
}
class strawbery extends fruit{
    public function message (){
        echo "im a fruit ";
    }
   /* public function intro(){
        echo "this  is a strawbery fruit withname {$this->name} and the color is {$this->color}";
}*/
}
try{
$strawbery=new strawbery("strawbery","red");
$strawbery->message();
$strawbery->intro();
}catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>