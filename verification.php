<?php
if(isset($_POST['username']) && isset($_POST['password']))
{
 if($_POST['username'] == "admin" && $_POST['password'] == "admin")
 {
    echo "Isilaby0uh4ckth1s";
 }
 else {
    header('Location: admin.php?error=1'); #mauvais mdp ou user
}
}
else
{
 header('Location: admin.php?error=2'); #mdp azu id vide
}
?>