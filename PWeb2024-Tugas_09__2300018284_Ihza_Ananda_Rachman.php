<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sintak Dasar</title>
</head>
<body>
    <?php
        $gaji = 20000000;
        $pajak = 0.1;
        $thp = $gaji - ($gaji * $pajak);

        echo ("Program 1 <br>");
        echo ("Gaji sebelum pajak : Rp. $gaji <br>");
        echo ("Gaji sesudah pajak : Rp. $thp <br>");

        echo ("<br><br>");

        echo ("Program 2 <br>");
        $a = 9;
        $b = 2;
        echo "$a == $b : " . (($a == $b) ? 'True' : 'False');
        echo "<br>";
        echo "$a != $b : " . (($a != $b) ? 'True' : 'False');
        echo "<br>";
        echo "$a > $b : " . (($a > $b) ? 'True' : 'False');
        echo "<br>";
        echo "$a < $b : " . (($a < $b) ? 'True' : 'False');
        echo "<br>";
        echo "($a == $b) && ($a > $b) : " . (($a == $b) && ($a > $b) ? 'True' : 'False');
        echo "<br>";
        echo "($a == $b) || ($a > $b) : " . (($a == $b) || ($a > $b) ? 'True' : 'False');
        ?>
    
</body>
</html>
