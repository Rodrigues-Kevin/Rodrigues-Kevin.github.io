<html>
    <head></head>
    <body style="font-size: 200%;">
        <center>
            <?php
                echo "<h1><u>Question 3</u></h1>";

                $NombreMultiple = 0;
                for ($i = 2567; $i < 4790; $i++)
                {
                    if ($i % 17 == 0)
                    {
                        $NombreMultiple += 1;
                    }
                }
                echo "Il y a ", $NombreMultiple, " multiples de 17 entre 2567 et 4789";
            ?>
        </center>
    </body>
</html>