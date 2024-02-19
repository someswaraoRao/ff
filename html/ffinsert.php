<?php
 include 'connect.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit1'])) {
    $room_id = $_POST['room_id1'];
    $pass = $_POST['pass1'];

    $sql = "INSERT INTO br1 (room_id, pass) VALUES ('$room_id', '$pass')";
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully for br1";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['submit2'])) {
    $room_id = $_POST['room_id2'];
    $pass = $_POST['pass2'];

    $sql = "INSERT INTO br2 (room_id, pass) VALUES ('$room_id', '$pass')";
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully for br2";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['submit3'])) {
    $room_id = $_POST['room_id3'];
    $pass = $_POST['pass3'];

    $sql = "INSERT INTO br3 (room_id, pass) VALUES ('$room_id', '$pass')";
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully for br3";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['submit4'])) {
    $room_id = $_POST['room_id4'];
    $pass = $_POST['pass4'];

    $sql = "INSERT INTO br4 (room_id, pass) VALUES ('$room_id', '$pass')";
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully for br4";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $table = $_POST['table'];

    $sql = "DELETE FROM $table WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Room Details</title>
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
</head>
<body>
<div class="navbar">
   <a href="adminregister.php">Home</a>

        <a href="ffinsert.php">Insert Room Details</a>
        <a href="ffget.php">Check Details</a>
        <a href="remove.php">Remove</a>
    </div>
<form action="" method="post">
    <label for="room_id1">Room ID for br1:</label>
    <input type="text" id="room_id1" name="room_id1" required><br>
    <label for="pass1">Password for br1:</label>
    <input type="password" id="pass1" name="pass1" required><br>
    <button type="submit" name="submit1">Submit for br1</button>
</form>

<form action="" method="post">
    <label for="room_id2">Room ID for br2:</label>
    <input type="text" id="room_id2" name="room_id2" required><br>
    <label for="pass2">Password for br2:</label>
    <input type="password" id="pass2" name="pass2" required><br>
    <button type="submit" name="submit2">Submit for br2</button>
</form>

<form action="" method="post">
    <label for="room_id3">Room ID for br3:</label>
    <input type="text" id="room_id3" name="room_id3" required><br>
    <label for="pass3">Password for br3:</label>
    <input type="password" id="pass3" name="pass3" required><br>
    <button type="submit" name="submit3">Submit for br3</button>
</form>

<form action="" method="post">
    <label for="room_id4">Room ID for br4:</label>
    <input type="text" id="room_id4" name="room_id4" required><br>
    <label for="pass4">Password for br4:</label>
    <input type="password" id="pass4" name="pass4" required><br>
    <button type="submit" name="submit4">Submit for br4</button>
</form>

<table border="1">
    <tr>
        <th>Room ID</th>
        <th>Password</th>
        <th>Delete</th>
    </tr>
    <?php
       include 'connect.php';

    $tables = ['br1', 'br2', 'br3', 'br4'];
    foreach ($tables as $table) {
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["room_id"]. "</td>";
                echo "<td>" . $row["pass"]. "</td>";
                echo "<td>";
                echo "<form action='' method='post'>";
                echo "<input type='hidden' name='delete' value='" . $row["id"] . "'>";
                echo "<input type='hidden' name='table' value='$table'>";
                echo "<button type='submit'>Delete</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No records found</td></tr>";
        }
    }
    $conn->close();

    ?>
</table>
</body>
</html>
