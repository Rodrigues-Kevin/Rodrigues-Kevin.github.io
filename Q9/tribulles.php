<html>
   <head></head>
   <body style="font-size: 200%;">
       <center>
           <?php
               echo "<h1><u>Tri à bulles d'un tableau de 100 nombres aléatoires</u></h1>";

               //Création du tableau de départ :
               $Tableau = [];
               for ($i = 0; $i != 100; $i++)
               {
                   array_push($Tableau, rand());
               }
               
               //Affichage des éléments du tableau de départ :
               echo "<h3><u>Tableau de départ :</u></h3>";
               echo "<p style='max-width: 70%;'>[";
               for ($i = 0; $i != 100; $i++)
               {
                   echo $Tableau[$i];
                   if ($i != 99)
                   {
                       echo ", ";
                   }
               }
               echo "]</p>";

               //Tri à bulles de façon optimisé :
               for ($j = 99; $j > -1; $j--)
               {
                   for ($i = 0; $i < $j; $i++)
                   {
                       if ($Tableau[$i] > $Tableau[$i + 1])
                       {
                           $Temporaire = $Tableau[$i];
                           $Tableau[$i] = $Tableau[$i + 1];
                           $Tableau[$i + 1] = $Temporaire;
                       }
                   }
               }

               //Affichage des éléments du tableau de fin :
               echo "<h3><u>Tableau de fin :</u></h3>";
               echo "<p style='max-width: 70%;'>[";
               for ($i = 0; $i != 100; $i++)
               {
                   echo $Tableau[$i];
                   if ($i != 99)
                   {
                       echo ", ";
                   }
               }
               echo "]</p>";
           ?>
       </center>
   </body>
</html>