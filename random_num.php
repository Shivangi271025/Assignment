
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
    <legend><b>&nbsp; Question-13&nbsp;</b></legend>
    <p><b> Get random values from array. </b></p>
</fieldset>
</br>
<fieldset class="fls1">
    <legend><b> &nbsp; Answer &nbsp;</b></legend>
    <pre>
    &#60;?php
    $x=array("Pen","Book","Scale","Eraser","Pencils","Sharpener");
    $random_keys=array_rand($x,4);
    echo $x[$random_keys[0]]."&#60;br&#62;";
    echo $x[$random_keys[1]]."&#60;br&#62;";
    echo $x[$random_keys[2]]."&#60;br&#62;";
    echo $x[$random_keys[3]];
    ?&#62;
    </pre>
</fieldset>
</br>
<fieldset class="fls2">
    <legend><b>&nbsp; Output &nbsp;</b></legend>
    <?php 
    
    $x=array("Pen","Book","Scale","Eraser","Pencils","Sharpener");
    $random_keys=array_rand($x,4);
    echo $x[$random_keys[0]]."<br>";
    echo $x[$random_keys[1]]."<br>";
    echo $x[$random_keys[2]]."<br>";
    echo $x[$random_keys[3]];
    
    
    ?>
</fieldset>
</body>
</html>



