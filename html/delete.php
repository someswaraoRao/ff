<?php
// Check if num is set and not empty
if (isset($_POST['num']) && !empty($_POST['num'])) {
    $num = $_POST['num'];

    include 'connect.php';
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize the input to prevent SQL injection
    $num = $conn->real_escape_string($num);

    // Prepare SQL statement to delete the row with the specified num
    $sql = "DELETE FROM logins WHERE num='$num'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: remove.php");

    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>
