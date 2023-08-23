        <?php
            $x = $_POST['x'];
            $z = $_POST['z'];
            $operator = $_POST['operator'];
            $rezultat;

            if (is_numeric($x) && is_numeric($z)){
                switch ($operator) {
                    case "+":
                    $rezultat = $x + $z;
                    break;
                    case "-":
                     $rezultat = $x - $z;
                    break;
                    case "%":
                    $rezultat = $x % $z;
                    break;
                    case "/":
                    $rezultat = $x / $z;
                    break;
                    case "**";
                    $rezultat = $x ** $z;
                }    
                echo "Rezultatul calcului dintre {$x} utilizand operatorul {$operator} {$z} este {$rezultat}";
            }
        ?>