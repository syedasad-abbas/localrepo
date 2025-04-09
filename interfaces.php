<?php
interface Fruits {
    public function fruit_color();
}
class Banana implements Fruits {
    public function fruit_color()
    {
        echo "yellow <br>";
    }
}

class Apple implements Fruits {
    public function fruit_color()
    {
        echo "red <br>";
    }
}
class Dates implements Fruits {
    public function fruit_color()
   {
    echo "black <br>";
   }
}
$banana = new Banana();
$apple = new Apple();
$dates = new Dates();
$fruits = array($banana ,$apple ,$dates);
foreach ($fruits as $fruit){
    $fruit->fruit_color();
}

?>