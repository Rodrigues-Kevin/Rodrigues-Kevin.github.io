<html>
   <head></head>
   <body style="font-size: 200%;">
       <center>
           <?php
               echo "<h1><u>Calcul de la somme Sn</u></h1>";
 
               echo "<h3><u>Sans boucle Pour :</u></h3>";
               echo "Somme : ", 1 + 2 + 3 + 4 + 5 + 6 + 7;
 
               echo "<h3><u>Avec boucle Pour :</u></h3>";
               $Somme = 0;
               for ($i = 1; $i < 8; $i++)
               {
                   $Somme += $i;
               }
               echo "Somme : ", $Somme;
           ?>
       </center>
   </body>
</html>