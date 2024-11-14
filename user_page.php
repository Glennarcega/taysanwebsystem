<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tinindag Festivals</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .header h2 {
            color: #333;
            font-size: 24px;
            margin: 0;
        }
        .content h1 {
            font-size: 30px;
            margin-top: 20px;
            color: #007bff;
        }
        .message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
        }
        .btn-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .btn-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Welcome to Taysan Web System</h2>
        </div>
        <div class="content">
            <!-- Notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="message">
                    <h3><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></h3>
                </div>
            <?php endif; ?>

            <!-- Logged in user information -->
            <?php if (isset($_SESSION['username'])) : ?>
                <h1>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></h1>

                <?php
                    // Get the ID from the URL
                    $id = isset($_GET['id']) ? $_GET['id'] : ''; // Check if ID exists in the URL
                ?>
                <a href="home_user.php?id=<?php echo $id; ?>" class="btn-link">Continue</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
