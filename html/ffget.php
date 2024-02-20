<?php
session_start(); // Start the session

// Check if the session variable is not set
if (!isset($_SESSION['password'])) {
    // Redirect to alogin.php
    header("Location: alogin.php");
    exit(); // Ensure that code below is not executed after redirect
}

// Now you can use $_SESSION['password'] to access the stored password
?>

<style>
        /* Add your CSS styles here */
        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
   <div class="navbar">
   <a href="adminregister.php">Home</a>

        <a href="ffinsert.php">Insert Room Details</a>
        <a href="ffget.php">Check Details</a>
        <a href="remove.php">Remove</a>
        <a href="logout.php">Logout</a>

    </div>
    <form action="" method="post">
    <button type="submit" name="time" value="10">10</button>
    <button type="submit" name="time" value="11">11</button>
    <button type="submit" name="time" value="12">12</button>
    <button type="submit" name="time" value="1">1</button>
</form>
<?php
// Check if a button was clicked
if (isset($_POST['time'])) {
    $time = $_POST['time'];

    include "connect.php";
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize the input to prevent SQL injection
    $time = $conn->real_escape_string($time);

    $sql = "SELECT * FROM logins WHERE time='$time'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table border='1'>";
        echo "<tr><th>Team Name</th><th>Lead Name</th><th>Number</th><th>Time</th><th>Transaction ID</th><th>Image</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["team_name"]. "</td>";
            echo "<td>" . $row["lead_name"]. "</td>";
            echo "<td>" . $row["num"]. "</td>";
            echo "<td>" . $row["time"]. "</td>";
            echo "<td>" . $row["t_id"]. "</td>";
            // Output the image using an HTML <img> tag
            echo "<td><img src='" . $row["img"] . "' width='500'></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
}
?>
