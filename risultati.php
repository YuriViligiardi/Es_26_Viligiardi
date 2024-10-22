<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>risultati.php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $name = $_GET["name"];
    $surname = $_GET["surname"];
    $date = $_GET["date"];
    $time = $_GET["time"];
    $transport = $_GET["transport"];
    $listCorsi = array();
    if (isset($_GET["corso1"])) {
        $c1 = $_GET["corso1"];
        $listCorsi[] = $c1;
    }
    if (isset($_GET["corso2"])) {
        $c2 = $_GET["corso2"];
        $listCorsi[] = $c2;
    }
    if (isset($_GET["corso3"])) {
        $c3 = $_GET["corso3"];
        $listCorsi[] = $c3;
    }
    createTable($name, $surname, $date, $time, $transport, $listCorsi);


    function controllField($s){
        if(empty($s)){
            return "Nessuna attività";
        } else {
            return $s;
        }
    }

    function putCorsi($l){
        if (empty($l)) {
            return "Nessuna attività";
        } else {
            $i = 0;
            echo "<td>";
            foreach ($l as $c) {
                if ($i == 0) {
                    echo $c;
                    $i++;
                } else {
                    echo ", $c"; 
                }
            }
            echo "</td>";
        }
    }

    function createTable($n, $s, $d, $t, $tr, $lc){
        echo "<table>";
            echo "<tr>";
                echo "<th>Nome</th>";
                echo "<th>Cognome</th>";
                echo "<th>Data di nascita</th>";
                echo "<th>Orario di uscita</th>";
                echo "<th>Mezzo di trasporto</th>";
                echo "<th>Corsi</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>" . $n = controllField($n) . "</td>";
                echo "<td>" . $s = controllField($s) . "</td>";
                echo "<td>" . $d = controllField($d) . "</td>";
                echo "<td>" . $t = controllField($t) . "</td>";
                echo "<td>" . $tr = controllField($tr) . "</td>";
                putCorsi($lc);
                
            echo "</tr>";
        echo "</table>";
    }

    ?>
</body>
</html>