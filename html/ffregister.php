<!DOCTYPE html>
<html>
<head>
    <title>Room Details</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-size: cover;
            background-color: darkgray;
            background-image:url('https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExb2E3N3lvbTh0ZGI5cWI0aHVnczU1Nmd1cTJldGY5aTZ4MG0zMWRuYiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/ZxrirVV6Lf7MKSo6fR/giphy.gif')
        }

        .form1 {
            margin-top: 0%;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(238, 232, 232, 0.1);
            width: 90%;
            max-width: 350px;
            box-sizing: border-box;
            background-size: cover;
            background-color: transparent;
            display: flex;
            align-items: horizontal;
            justify-content: center;
            margin: auto; /* Center the form */
        }

        form {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(238, 232, 232, 0.1);
            width: 90%;
            box-sizing: border-box;
            background-size: cover;
            margin: auto; /* Center the form */
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

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
            background-color: #f9fafc;
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
            margin-bottom: 10px; /* Adjust spacing between buttons */
        }
        form-control {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #000000;
        border-radius: 5px;
        font-size: 16px;
        transition: border-color 0.3s ease;
        }
          form-control:focus {
        border-color: #7d0a0a;
       }
         contact-form {
        width: 35%;
        margin: auto;
        padding: 40px;
        background-color: rgb(210, 214, 213);
        color: #333;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }
    .home-button {
    display: inline-block;
    text-decoration: none;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    margin-bottom: 20px;
    text-align: center;
    font-size: 18px;
}


.home-icon {
    width: 40px;
    vertical-align: middle;
    margin-right: 100%;
}


        button:hover {
            background-color: #218838;
        }

        @media only screen and (min-width: 768px) {
            /* Desktop styles */
            .form1, form {
                width: 50%;
            }
        }
    </style>
</head>
<body>
<a href="index.php" class="home-button">
    <img src="images/home-button-icon.webp" alt="Home" class="home-icon">
</a>
    <h2>Select the Room time</h2>
    <div class="heading">
        <form action="" method="post" class="form1">
            <button type="submit" name="time" value="10AM">10 AM</button>
            <button type="submit" name="time" value="11AM">11 AM</button>
            <button type="submit" name="time" value="12PM">12 PM</button>
            <button type="submit" name="time" value="1PM">1 PM</button>
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
            <input type="text" id="team_name" name="team_name" placeholder="Team Name" class="form-control" required>
            <input type="text" id="lead_name" name="lead_name" placeholder="Lead Name" class="form-control" required>
            <input type="tel" id="num" name="num" placeholder="Mobile Number" class="form-control" pattern="[0-9]{10}" required>
            <input type="password" id="pass" name="pass" placeholder="Password" class="form-control" required>
          

                <select id="time" placeholder="Room Time" class="form-control" name="time">
                    <option value="<?php echo $time; ?>"><?php echo $time; ?></option>
                </select>
<img src="game 4.jpg" alt="" width="300px">
                <input type="file" placeholder="Payment_Screenshot" class="form-control" id="img" name="img" required>
                <input type="text" placeholder="Transaction_id" class="form-control" id="transaction_id" name="transaction_id" required>

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
            // Display JavaScript alert message
            echo '<script>alert("Room Booked successfully");</script>';
            // Redirect to remove.php after 2 seconds
            echo '<script>setTimeout(function(){ window.location.href = "index.php"; });</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>