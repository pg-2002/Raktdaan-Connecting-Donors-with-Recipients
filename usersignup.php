<?php
session_start();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $c_pass = $_POST['confirm_password'];

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'project2';

    $conn = mysqli_connect($host, $user, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (strlen($pass) >= 6) {
        // Password meets the required length criteria
        // Proceed with the rest of your code
        if($pass==$c_pass){
            // Make sure to hash the password before inserting it into the database
            $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
        
            // Do not store the confirm_password in the database
            // Only store the hashed password
        
            $sql = "INSERT INTO user (name,email,password) VALUES ('$name','$email','$hashedPass')";
        
            
            if (mysqli_query($conn, $sql)) {
                echo "Registration successful!";
                $_SESSION['name'] = $name;
                header("Location: userpage1.php"); // Redirect after successful registration
                exit(); // Ensure that the script stops executing after redirection
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            } 
        
            else  {
                echo '<script>';
                echo 'alert("enter correct password");'; // Display an alert popup
                echo '</script>';
            }
        
        mysqli_close($conn);
    }
        else 
        {
            echo '<script>';
            echo 'alert("Password must be atleast 6 characters");'; // Display an alert popup
            echo '</script>';
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <style>
    body{
    background: url('images/blooddonation3.jpg') no-repeat;
    display: flex;
    justify-content: center;
    min-height: 100vh;
    background-size: cover;
    background-position: center;
    padding-top: 40px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.wrapper{
    position: relative;
    width: 550px; 
    height: 600px; 
    background: transparent;
    border: 2px solid  rgba(255, 255, 255, .5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0, 0, 0, .5);
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    
}

.wrapper .form-box{
    padding: 40px;
    width: 100%;
}

.wrapper .form-box.signup{
    transition: transform .18s ease;
    transform: translateX(0);
}

.form-box h2{
    font-size: 2em;
    text-align: center;
    color: maroon;
}

.inputbox{
    position: relative;
    width: 100%;
    height: 50px;
    border-bottom: 2px solid #0d171c;
    margin: 30px 0;
}

.inputbox label{
    position: absolute;
    top: 50%;
    left: 5px;
    font-size: 1em;
    font-weight: 550;
    pointer-events: none;
    color: #0d171c;
    transform: translateY(-50%);
    transition: .5s;
}

.inputbox input:focus~label,
.inputbox input:valid~label{
    top: -5px;
}

.inputbox input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-weight: 600;
    color: white;
    padding: 0 35px 0 5px;
}

.inputbox .icon{
    position: absolute;
    right: 8px;
    font-size: 1.2em;
    color: #111517;
    line-height: 60px;
}

.terms_cond{
    font-size: .9em;
    font-weight: 900;
    color: #111517;
    margin: -15px 0 15px;
    display: flex;
    justify-content: left;
}

.terms_cond label input{
    accent-color: #111314;
}

.btn{
    width: 100%;
    height: 45px;
    border: none;
    border-radius: 6px;
    outline: none;
    background-color: rgba(166, 41, 41, 0.949);
    font-size: 1em;
    color: #fff;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
    margin-top: 10px;
}

.btn:hover{
    background-color: rgba(157, 30, 30, 0.949);
}

.login_register{
    font-size: .9em;
    text-align: center;
    font-weight: 900;
    color: #111517;
    margin: 25px 0 10px;
    padding-bottom: 10px;
}

.login_register p a{
    color: #111517;
    text-decoration: none;
    font-weight: 900;
}

.login_register p a:hover{
    text-decoration: underline;
}


    </style>

</head>
<body>
<div class="wrapper">

<!-- <span class="icon-close"><ion-icon name="close"></ion-icon></span> -->


        <div class="form-box signup">

            <h2>SignUp</h2>

            <form action="#" method="post">

                <div class="inputbox">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" required name="name" autocomplete="off" required>
                    <label for="username">Name</label>
                </div>    

                <div class="inputbox">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required name="email" autocomplete="off" required>
                    <label for="email">Email</label>
                </div>

                <div class="inputbox">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="password" required name="password" autocomplete="off" required>
                    <label for="password" title="8 char">Password (Must be atleast 6 characters)</label>
                </div>

                <div class="inputbox">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="conpass" required name="confirm_password" autocomplete="off" required>
                    <label for="cpass">Confirm Password</label>
                </div>

                <button type="submit" class="btn" name="submit">SignUp</button>

                <div class="login_register">
                    <p>Already have an Account? <a href="userlogin.php" 
                    class="login_link">Login</a></p>
                </div>

            </form>
        </div> 
</div>




<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>