<?php
setcookie("username", $_COOKIE["username"], time()-1);
header('Location: index.php');
exit();
?>