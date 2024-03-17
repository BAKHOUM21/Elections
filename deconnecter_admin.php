<?php   
session_start(); //pour vous assurer que vous utilisez la même session
session_destroy(); //détruire la session
header("location: http://localhost/Election/index.php"); //pour rediriger vers "index.php" après la déconnexion
exit();
?>