<?php

    if(isset($_POST['num'])){
        $list=["Even","Odd"];
        $mynumber=$_POST['num'];
        $result=$list[$mynumber%2];
        unset($_POST['num']);
    }else{
        $mynumber="";
        $result="";
    }
?>
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
    <legend><b>&nbsp; Question-9&nbsp;</b></legend>
    <p><b> How can you tell if a number is even or odd without using any Condition or loop? </b></p>
</fieldset>
</br>
<fieldset class="fls1">
    <legend><b> &nbsp; Answer &nbsp;</b></legend>
    <pre>
    &#60;?php
        $list=["Even","Odd"];
        $mynumber=5;
        $result=$list[$mynumber%2];
    ?&#62;
    </pre>
</fieldset>
</br>
<fieldset class="fls2">
    <legend><b>&nbsp; Output &nbsp;</b></legend>
    <div>
        <form method="post"> 
            <input type="number" name="num" placeholder="Enter Number." required>
            <input type="submit" name="Submit">
        </form>
    </div><br>
    <div><span><b>Answare: <?php if($mynumber ==! ""){echo $mynumber." is ".$result;}?></b></span></div>
</fieldset>
</body>
</html>



