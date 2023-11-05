<?php

class base 
  {
    public static $name = "Wonder Woman";
    public function show()
    {
      echo self::name;
    }
  }
$test = new base();
$test->show();
?>
