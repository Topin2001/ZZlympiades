<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
 </head>
 <body>
 <div id="container">
 <!-- zone de connexion -->
 
 <form action="verification.php" method="POST">
 <h1>Connexion</h1>
 
 <label><b>Nom d'utilisateur</b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="password" required>

 <input type="submit" id='submit' value='LOGIN' >
 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 ?>
 </form>
 </div>
 </body>
 <!-- Notes to myself:
    - J'ai toujours pas rajouté tous les users dans la database....
    - c'est chiant.......
    - bon je le ferai après...
    - pour l'instant je note mes trucs içi
    - usernames:    -> le_Y_cest_le_S
                    -> admin
                    -> user
                    -> user2
                    -> admin7
                    -> kanté
                    -> user69
                    -> ps4
                    -> user420
                    -> user1337

    - passwords:    -> v3ry_s3cur3_p4ssw0rd
                    -> 12345678
                    -> admin
                    -> i_love_pizza
                    -> cacapipimdr
                    -> 1234haha
                    -> 0987654321
                    -> this_is_a_password
                    -> password
                    -> naruto
-->
</html>