<html>
   <head></head>
   <body style="font-size: 200%;">
       <center>
           <?php
               echo "<h1><u>Calcul de la somme Sn avec la méthode POST</u></h1>";
 
               $n = $_POST["n"];
               if ($n == "")
               {
                   echo "Veuillez saisir le nombre d'éléments n de la suite sur la page POST_HTML.html<br>";
               }
               else
               {
                    echo "<h3><u>Somme d'une suite de ", $n, " éléments :</u></h3>";
                    $Somme = 0;
                    for ($i = 1; $i < $n + 1; $i++)
                        {
                            $Somme += $i;
                        }
                    echo "Somme : ", $Somme;
               }
           ?>
       </center>
   </body>
</html>