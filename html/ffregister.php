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
            background-color:dimgray;
            /* background-image:url('https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExb2E3N3lvbTh0ZGI5cWI0aHVnczU1Nmd1cTJldGY5aTZ4MG0zMWRuYiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/ZxrirVV6Lf7MKSo6fR/giphy.gif')
        } */}

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
    color: white;
    margin-top: 20px;
    font-size: 34px; /* Adjust the font size as needed */
}


.details {
    text-align: center;
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
<!-- Include Font Awesome CSS -->
<!-- Include Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- HTML code for home icon and t justify-contentext -->
<div style="display:flex; justify-content:space-between">
<a href="index.php" class="home-button" >
    <i class="fas fa-home home-icon"></i>
    Home
</a>

</div>
    <h2>Select the Room time</h2>
    <div class="heading">
        <form action="" method="post" class="form1">
            <button type="submit" name="time" value="10">10 AM</button>
            <button type="submit" name="time" value="11">11 AM</button>
            <button type="submit" name="time" value="12">12 PM</button>
            <button type="submit" name="time" value="1">1 PM</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['time'])) {
        $time = $_POST['time'];

        include "connect.php";
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
    
    <label for="" style="color:#fff;"> UPI ID :  7013760163@axl</label>
    <img src="images/scanner.jpg" alt="7013760163@axl" width="300px">
    <label for="" style="color:#fff;">Payment_Screenshot</label>
    <input type="file" placeholder="Payment_Screenshot" class="form-control" id="img" name="img" required>
    
    <input type="text" placeholder="Transaction_id" class="form-control" id="transaction_id" name="transaction_id" required>

    <input type="hidden" name="img_path" id="img_path" value="">

    <input type="submit" value="Submit"><h4 style="color:white">In case of facing any problem contact: 7013760163 / 7780114699</h4>
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

    // File upload handling
    $targetDir = "uploads/";
    $fileName = basename($_FILES["img"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) {
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath)){
                // Insert image file path into database
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "INSERT INTO logins (team_name, lead_name, num, pass, time, t_id, img) VALUES ('$teamName', '$leadName', '$num', '$pass', '$time', '$transactionId', '$targetFilePath')";
                if ($conn->query($sql) === TRUE) {
                    // Display JavaScript alert message
                    echo '<script>alert("Registered successfully");</script>';
                    // Redirect to remove.php after 2 seconds
                    echo '<script>setTimeout(function(){ window.location.href = "index.php"; });</script>';
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            }else{
                echo "Sorry, there was an error uploading your file.";
            }
        }else{
            echo 'Sorry, only JPG, JPEG, PNG, GIF files are allowed to upload.';
        }
    }else{
        echo "File is not an image.";
    }
}
?>


</body>
</html>