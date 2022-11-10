<html>
<body  bgcolor="pink">
<meta charset="UTF-8">
    <form method="post">
        <h1>Enter your Number Below 👇</h1>
        <input type="number" name="number">👈
    </form>
</body>
</html>

<?php
if ($_POST) {

    $num = $_POST['number'];

    $x = $num;
    $sum  = 0;

    while ($x != 0) {
        $remi   = $x % 10;
        $sum   = $sum + ($remi * $remi * $remi);
        $x   = $x / 10;
    }

    if ($num == $sum) {
        echo "Yes $num an Armstrong Number👍";
    } else {
        echo "$num is not an Armstrong Number👎";
    }
}

?>