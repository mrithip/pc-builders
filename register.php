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

// Insert customer data into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO customers (name, email, address, phone) VALUES ('$name', '$email', '$address', '$phone')";
if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Registration successful!');
        window.location.href = 'page2.html';
    </script>";
} else {
    echo "<script>
        alert('Error: " . addslashes($sql) . "\\n" . addslashes($conn->error) . "');
        window.history.back(); // Go back to the previous page
    </script>";
}

}
$conn->close();
?>
