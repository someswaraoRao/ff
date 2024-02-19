<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Slots</title>
    <style>
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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            background-image:url('gh.jpg');
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .slot {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .slot h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }

        .slot p {
            margin: 10px 0;
            font-size: 18px;
            color: #666;
        }

        .slot:nth-child(even) {
            background-color: #f9f9f9;
        }

        .slot:nth-child(odd) {
            background-color: #fff;
        }

        .pay-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .pay-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="slot">
            <h2>Slot 1: 10am</h2>
            <form action="registration.php" method="POST">
            <input type="text" name="lead_name" class="form-control" placeholder="Lead Name" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <a href="#" class="pay-button">Pay Offline</a>
            <a href="QR.html" class="pay-button">Pay Online</a>
        </div>
        <div class="slot">
            <h2>Slot 2: 11am</h2>
            <form action="registration.php" method="POST">
            <input type="text" name="lead_name"class="form-control"  placeholder="Lead Name" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <a href="#" class="pay-button">Pay Offline</a>
            <a href="QR.html" class="pay-button">Pay Online</a>
        </div>
        <div class="slot">
            <h2>Slot 3: 12pm</h2>
            <form action="registration.php" method="POST">
            <input type="text" name="lead_name" class="form-control" placeholder="Lead Name" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <a href="#" class="pay-button">Pay Offline</a>
            <a href="QR.html" class="pay-button">Pay Online</a>
        </div>
        <div class="slot">
            <h2>Slot 4: 1pm</h2>
            <form action="registration.php" method="POST">
            <input type="text" name="lead_name" class="form-control" placeholder="Lead Name" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <a href="#" class="pay-button">Pay Offline</a>
            <a href="QR.html" class="pay-button">Pay Online</a>
        </div>
    </div>
</body>
</html>
