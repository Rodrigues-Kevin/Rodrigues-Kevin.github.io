<html>
    <head></head>
    <body>
        <center>
            <?php
                $Compteur = 0;
                $Limite = 0;
                while ($Compteur < 150)
                {
                    $Limite = $Limite + 1;
                    for ($i = 0; $i < $Limite; $i++)
                    {
                        if ($i % 2 == 0)
                        {
                            echo "O";
                        }
                        else
                        {
                            echo "X";
                        }
                    }
                    echo "<br>";
                    $Compteur = $Compteur + 1;
                }
            ?>
        </center>
    </body>
</html>