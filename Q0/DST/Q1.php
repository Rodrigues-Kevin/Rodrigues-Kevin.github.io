<html>
    <head></head>
    <body style="font-size: 200%;">
        <center>
            <?php
                $n = $_GET["Nombre"];
                $Compteur = 0;

                echo "<h1><u>Suite de Syracuse</u></h1>";
                if ($n == "")
                {
                    echo "Veuillez saisir un entier dans l'URL (Q1.php?Nombre=VALEUR)<br>";
                }
                else
                {
                    echo "Entier de départ : ", $n, "<br>";
                    while ($n != 1)
                    {
                        $Compteur = $Compteur + 1;
                        if ($n % 2 == 0)
                        {
                            $n = $n / 2;
                        }
                        else
                        {
                            $n = 3 * $n + 1;
                        }
                        echo "<br>Terme n'", $Compteur, " de la suite : ", $n;
                    }
                }
            ?>
        </center>
    </body>
</html>