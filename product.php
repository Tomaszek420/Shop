<?php
session_start(); // Umożliwi zarządzanie koszykiem w sesji
include 'db.php';
include 'header.php';

$product_id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");
$stmt->execute(['id' => $product_id]);
$product = $stmt->fetch();

if (isset($_POST['add_to_cart'])) {
    // Dodaj produkt do koszyka w sesji
    $_SESSION['cart'][] = $product;
    echo "<script>alert('Produkt został dodany do koszyka.');</script>";
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $product['name']; ?></title>
</head>
<body>
  <main>
        <h2><?php echo $product['name']; ?></h2>
        <p>Cena: <?php echo $product['price']; ?>zł</p>
        <form method="POST">
            <button type="submit" name="add_to_cart">Dodaj do koszyka</button>
        </form>
    </main>
    <footer>
<?php 
	include 'footer.php';
?>
</footer>
</body>
</html>