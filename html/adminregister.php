

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
    </div>
    

    <style>
        /* Add your CSS styles here */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-size: cover;
        }

        .form1 {
            margin-top: 0%;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(238, 232, 232, 0.1);
            width: 350px;
            max-width: 100%;
            box-sizing: border-box;
            background-size: cover;
            background-color: transparent;
            display: flex;
            align-items: horizontal;
            justify-content: center;
        }

        form {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(238, 232, 232, 0.1);
            width: 350px;
            max-width: 100%;
            box-sizing: border-box;
            background-size: cover;
            background-color: white;
        }

        h2 {
            color: #d8dee3;
            text-align: center;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
            background-color: #f9fafc;
        }

        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            font-size: 16px;
            color: #333;
            transition: border-color 0.3s ease;
        }

        select:focus {
            border-color: #0a7d0a;
        }

        button {
            background-color: #28a745;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        button:hover {
            background-color: #218838;
        }
    </style>

    <div class="heading">
        <form action="" method="post" class="form1">
            <button type="submit" name="time" value="10">10</button>
            <button type="submit" name="time" value="11">11</button>
            <button type="submit" name="time" value="12">12</button>
            <button type="submit" name="time" value="1">1</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['time'])) {
        $time = $_POST['time'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "freefire";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql_check = "SELECT COUNT(*) as total FROM logins WHERE time='$time'";
        $result_check = $conn->query($sql_check);
        $row_check = $result_check->fetch_assoc();
        if ($row_check['total'] < 12) {
            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="team_name">Team Name:</label><br>
                <input type="text" id="team_name" name="team_name"><br><br>

                <label for="lead_name">Lead Name:</label><br>
                <input type="text" id="lead_name" name="lead_name"><br><br>

                <label for="num">Number:</label><br>
                <input type="text" id="num" name="num"><br><br>

                <label for="pass">Password:</label><br>
                <input type="password" id="pass" name="pass"><br><br>

                <label for="time">Time:</label><br>
                <select id="time" name="time">
                    <option value="<?php echo $time; ?>"><?php echo $time; ?></option>
                </select><br><br>

                <label for="img">Upload Image:</label><br>
                <input type="file" id="img" name="img"><br><br>
                <label for="transaction_id">Transaction ID:</label><br>
                <input type="text" id="transaction_id" name="transaction_id"><br><br>

                <input type="submit" value="Submit">
            </form>
            <?php
        } else {
            echo "Booking Full";
        }

        $conn->close();
    }
    ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['team_name'])) {
        $teamName = $_POST['team_name'];
        $leadName = $_POST['lead_name'];
        $num = $_POST['num'];
        $pass = $_POST['pass'];
        $time = $_POST['time'];
        $transactionId = $_POST['transaction_id'];

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO logins (team_name, lead_name, num, pass, time, t_id) VALUES ('$teamName', '$leadName', '$num', '$pass', '$time', '$transactionId')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>

