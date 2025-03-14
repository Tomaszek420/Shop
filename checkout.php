<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'db.php';
    include 'header.php';
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $street = $_POST['street'];
    $house_number = $_POST['house_number'];

    // Zapisz zamówienie do bazy danych
    $stmt = $pdo->prepare("INSERT INTO orders (name, surname, phone, email, street, house_number) VALUES (:name, :surname, :phone, :email, :street, :house_number)");
    $stmt->execute([
        'name' => $name,
        'surname' => $surname,
        'phone' => $phone,
        'email' => $email,
        'street' => $street,
        'house_number' => $house_number
    ]);
    
    // Pobierz ID zamówienia
    $order_id = $pdo->lastInsertId();
    
    // Przekieruj na stronę z podziękowaniami
    header("Location: thank_you.php?order_id=" . $order_id);
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Podsumowanie zamówienia - R3MAKE</title>
</head>
<body>
    <main>
        <h2>Podsumowanie zamówienia</h2>
        <form method="POST">
            <label for="name">Imię:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="surname">Nazwisko:</label>
            <input type="text" id="surname" name="surname" required>
            
            <label for="phone">Numer telefonu:</label>
            <input type="text" id="phone" name="phone" required>
            
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="street">Ulica:</label>
            <input type="text" id="street" name="street" required>
            
            <label for="house_number">Numer domu:</label>
            <input type="text" id="house_number" name="house_number" required>
            
            <button type="submit">Złóż zamówienie</button>
        </form>
    </main>
    <footer>
        <p>© 2023 R3MAKE</p>
    </footer>
</body>
</html>