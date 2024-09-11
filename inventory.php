<!-- use an associative array to stoer inventory items with their quantities and prices. -eg.,['quantity'=>10,'price' => 50]]
 1.add new item:
 prompt the user to add a new item to the inventory.
  2. update item quantity
  -prompt the user to update the quantity of an existing items 
  take input usinf form
   3. find total value of the inventory -->
<?php
// Initialize inventory array
$inventory = [
    'item1' => ['quantity' => 10, 'price' => 50],
    'item2' => ['quantity' => 5, 'price' => 100],
];

// Function to add a new item to the inventory
function addItem(&$inventory, $itemName, $quantity, $price) {
    if (!isset($inventory[$itemName])) {
        $inventory[$itemName] = ['quantity' => $quantity, 'price' => $price];
        echo "Item '$itemName' added successfully.<br>";
    } else {
        echo "Item '$itemName' already exists in the inventory.<br>";
    }
}

// Function  to update the quantity of an existing item
function updateQuantity(&$inventory, $itemName, $quantity) {
    if (isset($inventory[$itemName])) {
        $inventory[$itemName]['quantity'] = $quantity;
        echo "Quantity of '$itemName' updated successfully.<br>";
    } else {
        echo "Item '$itemName' does not exist in the inventory.<br>";
    }
}

// Function to calculate the total value of the inventory
function calculateTotalValue($inventory) {
    $totalValue = 0;
    foreach ($inventory as $item) {
        $totalValue += $item['quantity'] * $item['price'];
    }
    return $totalValue;
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        $itemName = $_POST['item_name'] ?? '';
        $quantity = $_POST['quantity'] ?? 0;
        $price = $_POST['price'] ?? 0;

        switch ($action) {
            case 'add':
                addItem($inventory, $itemName, $quantity, $price);
                break;
            case 'update':
                updateQuantity($inventory, $itemName, $quantity);
                break;
        }
    }
}

$totalValue = calculateTotalValue($inventory);
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

    <!-- Form to add a new item -->
    <h2>Add New Item</h2>
    <form method="post">
        <label for="item_name">Item Name:</label>
        <input type="text" id="item_name" name="item_name" required><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required><br><br>
        <input type="hidden" name="action" value="add">
        <input type="submit" value="Add Item">
    </form>

    <!-- Form to update item quantity -->
    <h2>Update Item Quantity</h2>
    <form method="post">
        <label for="item_name">Item Name:</label>
        <input type="text" id="item_name" name="item_name" required><br><br>
        <label for="quantity">New Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br><br>
        <input type="hidden" name="action" value="update">
        <input type="submit" value="Update Quantity">
    </form>

    <!-- Display total value of inventory -->
    <h2>Total Value of Inventory: $<?php echo $totalValue; ?></h2>

    <!-- Display current inventory -->
    <h2>Current Inventory</h2>
    <ul>
        <?php foreach ($inventory as $item => $details): ?>
            <li><?php echo $item . ': ' . $details['quantity'] . ' units @ $' . $details['price'] . ' each'; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

