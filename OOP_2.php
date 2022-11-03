<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    class maths
    {

        public $a, $b, $c;

        function sum()
        {
            $this->c = $this->a + $this->b;
            echo $this->c;
        }
        function sub()
        {
            $this->c = $this->a - $this->b;
            echo $this->c;
        }
        function multy()
        {
            $this->c = $this->a * $this->b;
            echo $this->c;
        }
        function div()
        {
            $this->c = $this->a / $this->b;
            echo $this->c;
        }
    }
    $add = new maths;
    $add->a = 23;
    $add->b = 45;
    echo "    -: is sum of a and b" . $add->sum();

    echo "<br>";
    $sub = new maths;
    $sub->a = 23;
    $sub->b = 45;
    echo "    -: is substract of a and b" . $sub->sub();

    echo "<br>";
    $multy = new maths;
    $multy->a = 23;
    $multy->b = 45;
    echo "    -: is multyplication of a and b" . $multy->multy();

    echo "<br>";
    $div = new maths;
    $div->a = 23;
    $div->b = 45;
    echo "   -: is divission of a and b" . $div->div();
 
 

    

    ?>

</body>

</html>