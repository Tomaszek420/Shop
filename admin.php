<?php
session_start();

// Sprawdzamy, czy użytkownik jest już zalogowany
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Sprawdzanie czy formularz logowania został wysłany
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Użytkownik podał dane logowania
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Weryfikacja poprawności danych
        if ($username === 'admin' && $password === 'admin') {
            $_SESSION['loggedin'] = true; // Zaloguj użytkownika
        } else {
            $error = "Niepoprawny login lub hasło!";
        }
    }
}

// Jeśli użytkownik jest zalogowany, pobierz zamówienia
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    include 'db.php';

    // Pobierz wszystkie zamówienia z bazy danych
    $stmt = $pdo->query("SELECT * FROM orders");
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Panel Admina</title>
</head>
<body>
    <main>
        <?php if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true): ?>
            <!-- Formularz logowania -->
            <h2>Logowanie do panelu admina</h2>
            <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
            <form method="POST">
                <label for="username">Login:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Hasło:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Zaloguj</button>
            </form>
        <?php else: ?>
            <!-- Wyświetlanie zamówień -->
            <h2>Lista zamówień</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imię</th>
                        <th>Nazwisko</th>
                        <th>Telefon</th>
                        <th>Email</th>
                        <th>Ulica</th>
                        <th>Numer domu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($order['id']); ?></td>
                            <td><?php echo htmlspecialchars($order['name']); ?></td>
                            <td><?php echo htmlspecialchars($order['surname']); ?></td>
                            <td><?php echo htmlspecialchars($order['phone']); ?></td>
                            <td><?php echo htmlspecialchars($order['email']); ?></td>
                            <td><?php echo htmlspecialchars($order['street']); ?></td>
                            <td><?php echo htmlspecialchars($order['house_number']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="logout.php">Wyloguj się</a>
        <?php endif; ?>
    </main>
    <footer>
        <p>© 2023 R3MAKE</p>
    </footer>
</body>
</html>