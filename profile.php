<?php
session_start(); // Start the session
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'project2';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user is logged in, else redirect them to the login page
if (!isset($_SESSION['name'])) {
    header("Location: home.php");
    exit();
}

$name = $_SESSION['name']; // Retrieve the user's name from the session

$sql = "SELECT email FROM user WHERE name=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $name);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    $email = $row['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * {
  box-sizing: border-box;
}
body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
  .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    
        .profile {
            text-align: center;
            padding: 20px;
            background: #df1f2c;
            border-radius:7px;
            color:white;
        }
        .profile h1 {
            margin-bottom: 10px;
            color:white;
        }
        .profile-info {
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
        .profile-info p {
            margin-bottom: 10px;
            color: #555;
        }
        .profile-info span {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile">
            <h1>User Profile</h1>
        </div>
        <div class="profile-info">
            <p>Name: <span><?php echo $name; ?></span></p>
            <p>Email: <span><?php echo $email; ?></span></p>
        </div>
    </div>
</body>
</html>
