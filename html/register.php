<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament Registration</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMHF6Z3Zzbjk0NDh2Z3JiYTAxdXQ0ajhmeXAxdmptZHY5dWM3c3I1NiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/ZxrirVV6Lf7MKSo6fR/giphy.gif'); /* Add this line */
            background-size: cover;
        }

        form {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(238, 232, 232, 0.1);
            width: 350px;
            max-width: 100%;
            box-sizing: border-box;
            background-image: url('your-background-image-form.jpg'); /* Add this line */
            background-size: cover;
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

        small {
            display: block;
            margin-top: 5px;
            color: #6c757d;
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

    .form-control {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #000000;
        border-radius: 5px;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #7d0a0a;
    }

    .error {
        color: #e74c3c;
        font-size: 14px;
        margin-top: -10px;
        margin-bottom: 10px;
    }

    .button {
        border: none;
        padding: 15px 20px;
        border-radius: 5px;
        cursor: pointer;
        background-color: #7d0a0a;
        color: #fff;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .button:hover {
        background-color: green;
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

    center {
        display: block;
        text-align: center;
    }

    </style>
</head>
<body>
    <?php
    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ff"; // Replace "your_database_name" with your actual database name
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // If form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $teamname = $_POST["team_name"];
        $leadname = $_POST["lead_name"];
        $mobileno = $_POST["mno"];
        $password = $_POST["pass"];
        $timing = $_POST["time"];
        $paymentmethod = $_POST["payment"];
    
        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO reg1 (team_name, lead_name, mno, pass,time, payment) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $teamname, $leadname, $mobileno, $password, $timing, $paymentmethod);
    
        // Execute the statement
        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }
    
        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
    ?>
    
    <form id="registrationForm" method="post" >

    <h2>Tournament Registration</h2>

    
    <input type="text" id="teamname" name="teamname" placeholder="Team Name" class="form-control" required>

    <input type="text" id="leadname" name="leadname" placeholder="Lead Name" class="form-control" required>

    
    <input type="tel" id="mobileno" name="mobileno" placeholder="Mobile Number" class="form-control" pattern="[0-9]{10}" required>
    

    <input type="password" id="password" name="password" placeholder="Password"class="form-control" required>

    <div class="form-group">
    
        <select  id="timingSelect" name="timing">
            <option value="morning">--Select Time--</option>

            <option value="morning">10:00 am</option>
            <option value="afternoon">11:00 am</option>
            <option value="evening">12:00 pm</option>
            <option value="night">1:00 pm</option>
        </select>
    </div>
    <div class="form-group">
    
        <select  id="paymentmethod" name="paymentmethod">
            <option value="op">--Payment Method--</option>

            <option value="1">Offline</option>
            <option value="2">Online</option>
     
        </select>
    </div>

   

    <button type="button" onclick="submitForm()" style="margin-top: 10%;">Register</button>
</form>



<script>
     document.getElementById('timingSelect').addEventListener('change', function() {
        var selectedTiming = this.value;
        // You can perform further actions based on the selected timing
        console.log('Selected Timing: ' + selectedTiming);
    });
    function submitForm() {
        var teamName = document.getElementById('teamName').value;
        var username = document.getElementById('username').value;
        var mobileNumber = document.getElementById('mobileNumber').value;
        var password = document.getElementById('password').value;

        // You can add additional validation here

        // Assuming you want to send this data to a server for processing
        // For a real application, you would likely use AJAX to send the data to your server
        console.log('Team Name:', teamName);
        console.log('Username:', username);
        console.log('Mobile Number:', mobileNumber);
        console.log('Password:', password);

        // Reset the form after submission
        document.getElementById('registrationForm').reset();
    }
</script>

</body>
</html>