<!-- use an associative array to stoer inventory items with their quantities and prices. -eg.,['quantity'=>10,'price' => 50]]
 1.add new item:
 prompt the user to add a new item to the inventory.
  2. update item quantity
  -prompt the user to update the quantity of an existing items 
  take input usinf form-->
<?php
// Start session to store inventory data
session_start();

// Initialize inventory if not already set
if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = array(
        "item1" => array("quantity" => 10, "price" => 50),
        "item2" => array("quantity" => 5, "price" => 20)
    );
}

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        // Add new item
        $itemName = $_POST['item_name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

        $_SESSION['inventory'][$itemName] = array("quantity" => $quantity, "price" => $price);
        echo "<p>Item '$itemName' added successfully.</p>";
    } elseif (isset($_POST['update'])) {
        // Update existing item quantity
        $itemName = $_POST['update_item_name'];
        $newQuantity = $_POST['new_quantity'];

        if (isset($_SESSION['inventory'][$itemName])) {
            $_SESSION['inventory'][$itemName]['quantity'] = $newQuantity;
            echo "<p>Quantity of '$itemName' updated to $newQuantity.</p>";
        } else {
            echo "<p>Item '$itemName' not found.</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
</head>
<body>
    <h1>Inventory Management</h1>

    <h2>Add New Item</h2>
    <form method="post" action="">
        <label for="item_name">Item Name:</label>
        <input type="text" id="item_name" name="item_name" required>
        <br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>
        <br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>
        <br>
        <input type="submit" name="add" value="Add Item">
    </form>

    <h2>Update Item Quantity</h2>
    <form method="post" action="">
        <label for="update_item_name">Item Name:</label>
        <input type="text" id="update_item_name" name="update_item_name" required>
        <br>
        <label for="new_quantity">New Quantity:</label>
        <input type="number" id="new_quantity" name="new_quantity" required>
        <br>
        <input type="submit" name="update" value="Update Quantity">
    </form>

    <h2>Current Inventory</h2>
    <table border="1">
        <tr>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        <?php
        foreach ($_SESSION['inventory'] as $itemName => $item) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($itemName) . "</td>";
            echo "<td>" . htmlspecialchars($item['quantity']) . "</td>";
            echo "<td>" . htmlspecialchars($item['price']) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
