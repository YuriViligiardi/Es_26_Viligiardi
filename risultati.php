<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>risultati.php</title>
</head>
<body>
    <?php
    $name = $_GET["name"];
    $surname = $_GET["surname"];
    $date = $_GET["date"];
    $time = $_GET["time"];
    $transport = $_GET["transport"];
    $listCorsi = array();
    $c1 = $_GET["corso1"];
    $c2 = $_GET["corso2"];
    $c3 = $_GET["corso3"];
    

    function controllCorsi($c, $lc, $i){
        if (isset($c)) {
            $lc[$i] = $c;
        }
        return $lc;
    }
    ?>
</body>
</html>