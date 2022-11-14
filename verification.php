<?php
if(isset($_POST['username']) && isset($_POST['password']))
{
 if($_POST['username'] == "user69" && $_POST['password'] == "cacapipimdr")
 {
    echo "IsiLabs{R3M3MB3R_T0_CL34R_C0MM3NT5}";
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