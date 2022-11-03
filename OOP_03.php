<?php

class Maths{        //this is class

    public $x,$y,$z;  //this is propertice

    function Addition(){    //this is method
           $this->z=$this->x + $this->y;
        echo $this->z;
    }
        function multyplication(){    //this is method
            $this->z=$this->x * $this->y;
         echo $this->z;
 
        }
    }
   $Add= new Maths();
   $Add->x=50;
   $Add->y=19;

   $multy= new Maths();
   $multy->x=12;
   $multy->y=4;
 
   echo"  -: is sum of X and Y". $Add->Addition();
   echo"<br>";
   echo"  -: is multyplication of X and Y". $multy->multyplication();
    

?>