<?php
include 'init.php'; // Umożliwi zarządzanie sesją
include 'header.php'; // Włącz nagłówek

// Funkcja do usuwania elementu z koszyka
if (isset($_POST['remove'])) {
    $product_id = $_POST['product_id'];
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $product_id) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
    // Przebudowujemy tablicę, żeby nie było brakujących kluczy
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}
?>

<main>
    <h2>Koszyk</h2>
    <?php if (!empty($_SESSION['cart'])): ?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <li>
                    <?php echo $item['name']; ?> - <?php echo $item['price']; ?>zł
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="product_id" value="<?php echo $item['id']; ?>">
                        <button type="submit" name="remove">Usuń</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="checkout.php">Przejdź do zamówienia</a>
    <?php else: ?>
        <p>Obecnie nie ma produktów w koszyku.</p>
    <?php endif; ?>
</main>

<footer>
<?php 
	include 'footer.php';
?>
</footer>
</body>
</html>