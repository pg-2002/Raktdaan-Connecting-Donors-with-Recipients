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
        height: 220px;
        background-image:linear-gradient(rgba(4,9,30,1),rgba(241, 49, 49, 0.4)),url(blood.jpg);
        font-size: 62px;
        color:white;
        padding-right:0px;
        
    }
    .bank-head{
        font-size: 62px;
        color:white;
        position:relative;
       margin-left: 590px;
    }
    .add{
    
        height:30px;
        width: 30px;
        position: relative;
        margin-left: 1350px;
        
    }
     .add a{
        color:white;
        font-size:32px;
        text-decoration:none;
       }
       
       .add a:after{
        content: '';
        width: 0%;
        height: 2px;
        background: white;
        display: block;
        margin: auto;
        transition: 0.5s;
    }
    .add a:hover::after{
        width:90px;

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
.edit{
    background:#f2f2f2;
}

img{
    display: block;
    position: relative;
    top:15px;
    left:80px;
    height: 70px;
    width:150px;
}
.last{
    background:white;
}
.trash{
    color:	#ff3333;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <div class="bank"><img src="logo.png">
        <div class="bank-head">Blood Bank</div> <div class="add"><a href="adddata.php">+ADD</a></div></div>
    <div class="tab">
<table border="4" border-color="white">
        <tr><th> Venue</th>
        <th> Blood Group</th>
         <th>Amount</th> 
         <th>Price</th>  
         <th >Edit</th>
         <th>Trash</th>
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
      <td class="edit"> <a href="editdata.php?venue=<?php echo $arr['venue'];?>"><i class="fa fa-edit"></i></a></td>
      <td class="edit"> <a class="trash" href="del.php?venue=<?php echo $arr['venue'];?>"><i class="fa fa-trash"></i></a></td>
    </tr>
  <?php
    }
    ?>
  </table>
    </div>
    
</body>
</html>