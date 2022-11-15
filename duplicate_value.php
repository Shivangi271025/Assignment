<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duplicate_number</title>
    <style>
        .fls {
            width: 50%;
            padding: 15px;
            border-style: dotted;
            border-color: red;
            border-radius: 20px;

        }

        .fls1 {
            width: 50%;
            padding: 15px;
            border-style: dotted;
            border-color: green;
            border-radius: 20px;
        }

        .fls2 {
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
        <legend><b>&nbsp; Question-12&nbsp;</b></legend>
        <p><b>Write program to remove duplicate values from array. </b></p>
    </fieldset>
    </br>
    <fieldset class="fls1">
        <legend><b> &nbsp; Answer &nbsp;</b></legend>
        <pre>
    &#60;?php
    $n = array("Sunday", "Monday", "Tuesday", "Wednesday", "Wednesday","Friday","Saturday","Friday");
    print_r(array_unique($n));
    ?&#62;
    </pre>
    </fieldset>
    </br>
    <fieldset class="fls2">
        <legend><b>&nbsp; Output &nbsp;</b></legend>
        <?php

        $n = array("Sunday", "Monday", "Tuesday", "Wednesday", "Wednesday", "Friday", "Saturday", "Friday");
        print_r(array_unique($n));

        ?>
    </fieldset>
</body>

</html>