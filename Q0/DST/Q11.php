<html>
    <head></head>
    <body style="font-size: 200%;">
        <center>
            <?php
                echo "<h1><u>Question 11</u></h1>";

                echo "<h3><u>Demi sapin :</u></h3>";
                for ($i = 1; $i < 8; $i++)
                {
                    echo "<div class='Ligne' style='float: left;margin-left: 47%;'>";
                    echo str_repeat("*", $i);
                    echo "</div><br>";
                }

                echo "<h3><u>Demi sapin à l'envers :</u></h3>";
                for ($i = 7; $i != 0; $i--)
                {
                    echo "<div class='Ligne' style='float: left;margin-left: 47%;'>";
                    echo str_repeat("*", $i);
                    echo "</div><br>";
                }
            ?>
        </center>
    </body>
</html>