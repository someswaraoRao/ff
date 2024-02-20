<?php
// Start session
session_start();

// Check if the 'time' parameter is set in the URL
if(isset($_GET['time'])) {
    $time = $_GET['time']; // Get the value of 'time' parameter
    
    // Assuming you have a database connection established
    // Make sure to replace placeholders with your actual database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "freefire";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if there is an entry in the logins table with the provided num and time
    $sql_logins = "SELECT * FROM logins WHERE num = '".$_SESSION['num']."' AND time = '$time'";
    $result_logins = $conn->query($sql_logins);

    if ($result_logins->num_rows > 0) {
        // Entry found in logins table, proceed to fetch details from the corresponding br table

        // Determine the table based on the value of 'time'
        $table = '';
        switch ($time) {
            case '10':
                $table = 'br1';
                break;
            case '11':
                $table = 'br2';
                break;
            case '12':
                $table = 'br3';
                break;
            case '1':
                $table = 'br4';
                break;
            default:
                echo "Invalid time value";
                exit;
        }

        // Assuming each br table structure: id, room_id, pass
        $sql_br = "SELECT room_id, pass FROM $table ";
        $result_br = $conn->query($sql_br);

        if ($result_br->num_rows > 0) {
            // Output data of each row
            while($row = $result_br->fetch_assoc()) {
                echo "Details from ".$table.":<br>";
                echo "Room ID: " . $row["room_id"]. "<br>";
                echo "Password: " . $row["pass"]. "<br>";
            }
        } else {
            echo "Wait till the Match Starts";
        }
    } else {
        echo "You are not registerd for Match at ".$time;
    }

    $conn->close();
}
?>
