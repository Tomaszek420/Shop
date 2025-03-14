<?php
include 'init.php'; // Dodaj to, aby mieć sesję włączoną

// Inizjalizacja zmiennych koszyka
$total_items = 0;
$total_price = 0.00;

// Obliczamy liczbę produktów i całkowitą cenę
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $total_items++;
        $total_price += $item['price'];
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title><?php echo isset($title) ? $title : 'R3MAKE'; ?></title>
</head>
<body>
    <header>
        <a href="http://localhost/R3MAKE/"><h1><i>R3MAKE</i></h1></a>
		
		<a href="link" class="menu"></a>
		<a href="link" class="menu"></a>
		<a href="link" class="menu"></a>
		<a href="link" class="menu"></a>
		<a href="link" class="menu"></a>
		<a href="#hoodie" class="menu">Hoodie</a>
		<a href="link" class="menu">T-shirt</a>
		<a href="link" class="menu">Accessories</a>
		<a href="link" class="sale">SALE</a>
		<a href="link" class="menu"></a>
		<a href="link" class="menu"></a>
		<a href="link" class="menu"></a>
		<a href="link" class="menu"></a>
		<a href="link" class="menu"></a>
		
        <div class="cart-info">
            <a href="cart.php"> <i class="fas fa-shopping-cart cart-icon"></i>
 (<?php echo $total_items; ?>) - <?php echo number_format($total_price, 2); ?>zł</a>
        </div>
    </header>