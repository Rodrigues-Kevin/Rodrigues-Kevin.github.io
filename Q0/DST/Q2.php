<html>
    <head></head>
    <body style="font-size: 200%;">
        <center>
            <?php
                echo "<h1><u>Question 2</u></h1>";

                $n = 0;
                while ($n / ($n + 1) <= 0.98)
                {
                    $n += 1;
                }
                echo "Le premier entier n tel que n/(n+1) > 0,98 est ", $n;
            ?>
        </center>
    </body>
</html>