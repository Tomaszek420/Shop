<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dziękujemy za zamówienie</title>
</head>
<body>
    <main>
        <h2>Dziękujemy za złożenie zamówienia!</h2>
        <?php
        // Sprawdzamy, czy został podany ID zamówienia
        if (isset($_GET['order_id'])) {
            $order_id = htmlspecialchars($_GET['order_id']);
            echo "<p>Twoje zamówienie zostało złożone. Numer zamówienia: <strong>$order_id</strong></p>";
        } else {
            echo "<p>Błąd: Nie podano numeru zamówienia.</p>";
        }
        ?>
        <a href="index.php">Powrót do strony głównej</a>
    </main>
    <footer>
        <p>© 2023 R3MAKE</p>
    </footer>
</body>
</html>