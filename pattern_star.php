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
    <legend><b>&nbsp; Question-7 &nbsp;</b></legend>
    <p><b> Write a program for this Pattern: </b></p>
    <pre>*****
*
*
*
*****</pre>
</fieldset>
</br>
<fieldset class="fls1">
    <legend><b> &nbsp; Answer &nbsp;</b></legend>
    <h5>Method-1</h5>
    <pre> 
        echo "*****&#60;br&#62;**&#60;br&#62;*&#60;br&#62;*****";
    </pre>
    <h5>Method-2</h5>
    <pre> 
        for ($i=0; $i < 5; $i++) { 
            for($j=0;$j < 5; $j++){
                echo "*";
                if($i>=1 && $i<=3){
                    break;
                }
            }
            echo "&#60;br&#62;";
        }
    </pre>
</fieldset>
</br>
<fieldset class="fls2">
    <legend><b>&nbsp; Output &nbsp;</b></legend>
    <h5>Method-1 Output</h5>
    <?php echo "*****<br>*<br>*<br>*<br>*****";?>

    <h5>Method-2 Output</h5>
    <?php
        for ($i=0; $i < 5; $i++) { 
            for($j=0;$j < 5; $j++){
                echo "*";
                if($i>=1 && $i<=3){
                    break;
                }
            }
            echo "<br>";
        }
    ?>
</fieldset>
</body>
</html>