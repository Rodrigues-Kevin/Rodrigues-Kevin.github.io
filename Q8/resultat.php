<html>
   <head></head>
   <body style="font-size: 200%;">
       <center>
           <?php
               $Nom = $_POST["Nom"];
               if ($Nom == "")
               {
                   echo "Veuillez saisir votre nom sur la page formulaire.html<br>";
               }
               else
               {
                    echo "Bonjour ", $Nom;
               }
           ?>
       </center>
   </body>
</html>