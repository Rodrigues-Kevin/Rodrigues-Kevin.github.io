<html>
    <head></head>
    <body style="font-size: 200%;">
        <center>
            <?php
                echo "<h1><u>Question 6</u></h1>";

                $CA = $_GET["ChiffreAffaire"];
                if ($CA == "")
                {
                    echo "Veuillez saisir le montant du chiffre d'affaire dans l'URL (Q6.php?ChiffreAffaire=VALEUR)<br>";
                }
                else
                {
                    echo "Chiffre d'affaire : ", $CA, " €<br>";
                    if ($CA < 7000)
                    {
                        echo "<br>La prime est de 6% soit donc : ", $CA * 0.06, " €";
                    }
                    else if ($CA <= 12000)
                    {
                        echo "<br>La prime est de 9% soit donc : ", $CA * 0.09, " €";
                    }
                    else
                    {
                        echo "<br>La prime est de 12% soit donc : ", $CA * 0.12, " €";
                    }
                }
            ?>
        </center>
    </body>
</html>