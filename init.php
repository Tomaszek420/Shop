<?php
// init.php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Uruchamiamy sesję tylko, jeśli jeszcze nie jest aktywna
}
?>