<!DOCTYPE html>
<html>
<head>
<style>
body, html {
  height: 100%;
  font-family: 'Poppins', sans-serif;
}

* {
  box-sizing: border-box;
  
}

.bgimg {
    height: 810px;
     width: 100%;
    background-image:linear-gradient(rgba(4,9,30,1),rgba(241, 49, 49, 0.4)),url(form.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
    left:0px;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Add styles to the form container */
.container {

  width: auto;
  height:810px;
  margin: 0 auto;
  border: 1px solid white;
  padding: 20px;
  background:white;
  opacity: 9;
  color:rgb(255, 254, 254);
  background: transparent;
  backdrop-filter: blur(20px);
  box-shadow: 0 0 30px rgba(0, 0, 0, .5);
}

/* Full-width input fields */
  input[type="text"],input[type="email"],
  select {
      width: 100%;
      padding: 10px;
      margin-bottom:8px;
}
select {
    height: 40px;
}
input[type="int"],input[type="int"],
  select {
      width: 100%;
      padding: 5px;
      margin-bottom:20px
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
/* Set a style for the submit button */
input[type="submit"] {
    background-color: #fe3e3e;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type="submit"]:hover {
    background-color:#df1f2c;
    
}
.reg-head{
  margin-top: -10px;
  height:60px;
  width:auto;
  background-color:#df1f2c;
  text-align: center;
  padding-top:1px;
  color: white;
  margin-bottom: 7px;
}

</style>


</head>
<body>
<div class="bgimg">
  <form action="saveddetails.php" class="container" method="post">
    <div class="reg-head"><h2>Blood Donor Registration Form</h2></div>
        <!-- <form action="#" method="post"> -->
            <label for="name"><b>Name:</b></label>
            <input type="text" placeholder="Enter Name" id="name" name="name" required>

            <label for="email"><b>Email:</b></label>
            <input type="email" placeholder="Enter Email Id" id="email" name="email" required>
            <br>
            <label for="birthday"><b>Date Of Birth:</b></label>
<input type="date" id="birthday" name="dob">
<br><br>
<label for="weight"><b>Weight(kg)<b></label>
<input type="int" placeholder="Weight (in kg)" name="weight" id="weight" required>
<label for="Height"><b>Height(cm)</b></label>
<input type="int" placeholder="Height" name="height" id="Height" required><br>
            <label for="bloodType"><b>Blood Type:</b></label>
            <select id="bloodType" name="btype" required>
                <option value="">Select Blood Type</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <br>
            <label for="gender"><b>Select Your Gender:</b></label>
  <table class="gender">
    <tr> <td>   <input type="radio" id="male" name="gender" value="Male">  </td>
    <td> <label for="male">Male</label> </td> </tr>
    <tr> <td>   <input type="radio" id="female" name="gender" value="Female">   </td>
    <td> <label for="female">Female</label> </td> </tr>
    <tr> <td>   <input type="radio" id="other" name="gender" value="Other">   </td>
    <td> <label for="other">Other</label> </td> </tr>
  </table> <br>
  <label for="Address"><b>Address:</b></label>
  <input type="text" placeholder="Enter Address" id="Address" name="address" required>
  <br>
  <label for="Pincode"><b>Pincode:</b></label>
  <input type="text" placeholder="Enter Pincode" id="Pincode" name="pcode" required>
  <br>
            <label for="contactNumber"><b>Contact Number:</b></label>
            <input type="text" placeholder="Enter Contact Number" id="cnor" name="cno" required>
            <br>
            <input type="submit" value="Submit">
        </form>
        <?php
    $result=-1;
    if(isset($_GET['result']))
    {
      $result=$_GET['result'];
    }
      if($result==1)
      {
        echo '<script>';
        echo 'alert("Registered succesfully!");'; // Display an alert popup
        echo '</script>';
         }

      else if($result==0)
      {
      echo '<script>';
      echo 'alert("Problem in data found");'; // Display an alert popup
      echo '</script>';
      }
  ?>
        
</div>
</body>
</html>