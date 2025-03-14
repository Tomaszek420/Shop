<?php
session_start();
session_destroy(); // Zniszcz sesję
header("Location: admin.php"); // Przekieruj na stronę logowania
exit();
?>