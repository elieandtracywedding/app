<?php
// Database connection
$db_host = 'sql305.infinityfree.com';
$db_user = 'if0_38263341';
$db_password = '84kYGGJn1HM';
$db_name = 'if0_38263341_wedding_rsvp';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];

// Insert data into the database
$sql = "INSERT INTO rsvp_table (full_name, phone_number) VALUES ('$full_name', '$phone_number')";

if ($conn->query($sql) === TRUE) {
    // Redirect to thank you page
    header("Location: thankyou.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>