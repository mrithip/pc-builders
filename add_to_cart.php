<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pc_builders";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert components into the cart table
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch all POST values (both radio and checkboxes)
    $components = [];

    foreach ($_POST as $key => $value) {
        if ($key === 'components') { // Handle checkboxes
            $components = array_merge($components, $value);
        } elseif ($key !== 'componentsForm') { // Handle radio buttons
            $components[] = $value;
        }
    }

    // Retrieve the last registered customer (modify if customer_id is provided another way)
    $sql = "SELECT id FROM customers ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $customer_id = $result->fetch_assoc()['id'];

        // Insert each component into the cart table
        foreach ($components as $component) {
            $stmt = $conn->prepare("INSERT INTO cart (customer_id, component) VALUES (?, ?)");
            $stmt->bind_param("is", $customer_id, $component);

            if (!$stmt->execute()) {
                echo "<script>
                    alert('Error adding component: " . addslashes($stmt->error) . "');
                    window.history.back();
                </script>";
                exit();
            }
        }
        echo "<script>
            alert('Components added to cart successfully!');
            window.location.href = 'index.html'; // Redirect to a cart view page
        </script>";
    } else {
        echo "<script>
            alert('No customer found! Please register first.');
            window.history.back();
        </script>";
    }
}
$conn->close();
?>
