<!DOCTYPE html>
<html lang="en">
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
    height: 720px;
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

  width: 410px;
  height:490px;
  margin: 0 auto;
  border: 1px solid white;
  border-radius:20px;
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
button[type="submit"] {
    background-color: #fe3e3e;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    font-size:20px;
    height:45px;
    margin-top:5px;
}
button[type="submit"]:hover {
    background-color:#df1f2c;
    
}
.det-head{
  margin-top: -10px;
  height:60px;
  width:auto;
  background-color:#df1f2c;
  text-align: center;
  padding-top:1px;
  color: white;
  margin-bottom: 7px;
  border-radius:10px;
}

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="bgimg">
<form action="save.php" class="container" method="post">
    
<div class="det-head"><h2>Add details</h2></div>
        
        
           <br> <label for="venue"><b>Venue:</b></label>
           <input type="text" name="venue" id="venue" placeholder="venue" size="25px" maxlength="100" required></td></tr>

          <br>  <label for="bloodtype"><b>Blood Group:</b></label>
          <select id="bloodtype" name="bloodtype" placeholder="bloodtype" required>
         <br>       <option value="">Select Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>

            <br><label for="amount"><b>Amount:</b></label>
            <input type="text" name="amount" id="amount" placeholder="amount" size="25px" maxlength="100" required>

           <br> <label for="price"><b>Price:</b></label>
            <input type="text" name="price" id="price" placeholder="price" size="25px" maxlength="100" required>

              <br> <button type="Submit">Submit</button> 
    </form>
</body>
<?php
    $result=-1;
    if(isset($_GET['result']))
    {
      $result=$_GET['result'];
    }
    ?>
    </div>
</html>