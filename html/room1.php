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
                echo "<div style='color: red;'>Invalid time value</div>";
                exit;
        }

        // Assuming each br table structure: id, room_id, pass
        $sql_br = "SELECT room_id, pass FROM $table ";
        $result_br = $conn->query($sql_br);

        if ($result_br->num_rows > 0) {
            // Output data of each row
            $details = [];
            while($row = $result_br->fetch_assoc()) {
                $details[] = [
                    'room_id' => $row["room_id"],
                    'password' => $row["pass"]
                ];
            }
        } else {
            $details = false;
        }
    } else {
        $details = 'unregistered';
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match Details</title>
    <style>body {
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
}

.home-button {
    margin-top: 20px;
}

.details {
    text-align: center;
}
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
<!-- Include Font Awesome CSS -->

<!-- HTML code for home icon -->
<a href="game.php" class="home-button">
    <i class="fas fa-home home-icon"></i>GO BACK
</a>

    <?php
    if ($details === 'unregistered') {
        echo "<div class='error'>You are not registered for the Match at ".$time."</div>";
    } elseif ($details === false) {
        echo "<div class='error'>Wait till the Match Starts</div>";
    } else {
        foreach ($details as $detail) {
            echo "<div class='details'>";
            echo "<h2>Details from ".$table.":</h2>";
            echo "<h1>Room ID: " . $detail["room_id"] . "</h1>";

            echo "<h1>Password: " . $detail["password"]. "</h1>";
            echo "</div>";
        }
    }
    ?>
</body>
</html>
