<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Pattern</title>
    <style>
        .fls{
            width: 50%;
            padding: 15px;
            border-style: dotted;
            border-color: red;
            border-radius: 20px;
            
        }
        .fls1{
            width: 50%;
            padding: 15px;
            border-style: dotted;
            border-color: green;
            border-radius: 20px;
        }
        .fls2{
            width: 50%;
            padding: 15px;
            border-style: dotted;
            border-color: blue;
            border-radius: 20px;
        }
    </style>
</head>
<body>
<fieldset class="fls">
    <legend><b>&nbsp; Question-8&nbsp;</b></legend>
    <p><b> What will be the values of $a and $b after the code below is executed? Explain your answer. </b></p>
    <pre>$a = '1';
$b = &$a;
$b = "2$b";</pre>
</fieldset>
</br>
<fieldset class="fls1">
    <legend><b> &nbsp; Answer &nbsp;</b></legend>
    <h5>Explain:</h5>
    <p>In this code first i created one "a" variable in this variable i stored string "1"
        after that i created one more variable "b" and i set $b reference $a,so that before 
        Excution we get value $a = '1', $b= '1' and after Excution we get value $a='21',and $b='21'
        becuse b as reffer as a so that both value are same.  
    </p>
    <h5>Code:</h5>
    <pre>
    &#60;?php;
       $a ='1';
       $b = &$a;
       echo "Excution before A = $a and B = $b .&#60;br&#62;";
       $b ="2$b";
       echo "Excution after A = $a and B = $b.&#60;br&#62;";
    ?&#62;
    </pre>
    
</fieldset>
</br>
<fieldset class="fls2">
    <legend><b>&nbsp; Output &nbsp;</b></legend>
    <?php
       $a ='1';
       $b = &$a;
       echo "Excution before A = $a and B = $b .<br>";
       $b ="2$b";
       echo "Excution after A = $a and B = $b.<br>";
    ?>
</fieldset>
</body>
</html>