<?php
    include('conn.php');
    $obj=new conn();
    $res=$obj->get_record();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        font-family: 'Poppins', sans-serif;
    }
    .bank{
        width:auto;
        height: 170px;
        background-image:linear-gradient(rgba(4,9,30,1),rgba(241, 49, 49, 0.4)),url(blood.jpg);
        font-size: 62px;
        color:white;
        text-align: center;
        
    }
    .tab{
        height:auto;
        width:870px;
        text-align: center;
        margin-top: 33px;
        position: relative;
        left:370px;
    }
    table{
        border-color: white;
    }
    th{
    background-color:#fff7e6;
    height: 55px;
    width:170px;
}
td{
    height: 55px;
    width:170px;
}
.thanks{
    font-size: 30px;
    font-weight: 300;
    text-align: center;
    height: 20px;
    width:830px;
    position: relative;
    left:310px;
    margin-top: 40px;
    bottom: 0px;
}
img{
    display: block;
    position: relative;
    top:15px;
    left:80px;
    height: 70px;
    width:150px;
}

</style>
<body>
    <div class="bank"><img src="logo.png"></a>
        Blood Bank</div>
    <div class="tab">
<table border="4" border-color="white">
        <tr><th> Venue</th>
        <th> Blood Group</th>
         <th>Amount</th> 
         <th>Price</th>  
        </tr>
        <?php
    while($arr=mysqli_fetch_array($res))
    {
  ?>
    <tr>
      <td><?php echo $arr['venue'];?></td>
      <td><?php echo $arr['bloodtype'];?></td>
      <td><?php echo $arr['amount'];?></td>
      <td><?php echo $arr['price'];?></td>
    </tr>
  <?php
    }
    ?>
  </table>
    </div>
    <div class="thanks">Happy to Help you!</div>
</body>
</html>