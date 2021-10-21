<?php

class fruit{
    public $name;
    public $color;

    function __construct($x)
    {
        $this->name=$x;
    }

    function __destruct()
    {
     echo "Your contruct has destroy";   
    }
    function set_name($n)
    {
        $this->name=$n;
    }

    function get_name()
    {
       return $this->name;
    }
    function set_color($n)
    {
        $this->color=$n;
    }

    function get_color()
    {
       return $this->color;
    }
}

$fobj=new fruit('Strawberry');
// $fobj->set_name('Mango');
echo $fobj->get_name()."<br>";
// $fobj->set_color('Yellow');
// echo $fobj->get_color();
echo "Hit<br>";


?>