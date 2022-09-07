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
        $a = "5";
        $value = array(1,2,3,4,"ห้า");
        $n = count($value);
        var_dump($a == $n);
        echo "<br>";
        for($i =0;$i<$n;$i++){
            echo $value[$i]."<br>";
        }
    ?>
</body>
</html>