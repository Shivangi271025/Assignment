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
    //Calculate percentage and Grade 

    echo "There are Five Subject";
    echo "<br>";
    echo "Maths";
    echo "<br>";
    echo "Physics";
    echo "<br>";
    echo "Biology";
    echo "<br>";
    echo "Computer";
    echo "<br>";
    echo "Chemistry";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $sub_1 = 98;
    $sub_2 = 87;
    $sub_3 = 78;
    $sub_4 = 69;
    $sub_5 = 89;

    $Total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5;
    echo " The Total of Five Subject :----$Total";

    echo "<br>";
    echo "<br>";
    echo "<br>";
    $Percentage = ($Total / 500.0) * 100;
    echo "Percentage:----$Percentage";

    echo "<br>";
    $Grade = "Null";
    if ($Percentage >= 80)
        $Grade = "A";
    elseif ($Percentage >= 70 && $Percentage < 80)
        $Grade = "B";
    elseif ($Percentage >= 60 && $Percentage < 70)
        $Grade = "C";
    elseif ($Percentage >= 50 && $Percentage < 60)
        $Grade = "D";
    elseif ($Percentage >= 40 && $Percentage < 50)
        $Grade = "E";
    elseif ($Percentage >= 30 && $Percentage < 40)
        $Grade = "F";
    elseif ($Percentage >= 10 && $Percentage < 30)
        $Grade = "G";

    echo "The Grade:-----$Grade";

    echo "<br>";
    echo "<br>";
    echo "<br>";



    echo"find thursday in week using Switch case";
    echo"<br>";
    echo"<br>";

    $day = "4";

    switch ($day) {
        case 1:
            printf("Monday");
            break;
        case 2:
            printf("Tuesday");
            break;
        case 3:
            printf("Wednesday");
            break;
        case 4:
            printf("Thursday");
            break;
        case 1:
            printf("Friday");
            break;
    }

    ?>



</body>

</html>