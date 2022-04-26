<?php

include 'maindbConn.php';
session_start();
ob_start();
if (($_POST ["username"] == $user) and ($POST ["password"] == $pass)) {
  $_SESSION ["login"] = "true";
  $_SESSION ["user"] = $user;
  $_SESSION ["pass"] = $pass;
  header("Location: index.php");
} else {
  echo "Kullanıcı adı veya şifre yanlış.";
}

?>