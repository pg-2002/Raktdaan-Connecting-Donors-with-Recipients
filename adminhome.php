<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raktdaan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<!--latest version of font-awesome doesnot work here-->
</head>


<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="Images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="logout2.php">LOGOUT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1> Welcome to <br> Raktdaan Admin Portal </h1>
            <p> Thank you for being a vital part of our commitment to saving lives <br> 
                through blood donation. This admin portal serves as a centralized hub <br>
                empowering administrators like you to efficiently manage and <br> 
                oversee the crucial processes involved in blood donation.
            </p>
            <a href="bank/showbank.php" class="hero-btn">UPDATE</a>
        </div>
    </section>
 

<!--footer section-->
    <section class="footer">
        <h4>About Us</h4>
        <p>We are the students of Dr. B. C. Roy Engineering College<br> Academy of Professional Courses<br> BCA Dept. 5th SEM</p>
        <p> Anindita Gope<br> Konkana Tapader<br> Priti Sikdar<br> Priyanka Garai<br> Sanjib Mukherjee</p>
        <div class="icons">
            <i class="fa fa-instagram"></i>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-github"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        
    </section>

<style>
*{
   margin: 0;
   padding: 0;
   font-family: 'Poppins', sans-serif;
}
.header{
    min-height: 75vh;
    width: 100%;
    background-image:linear-gradient(rgba(241, 49, 49, 0.6),rgba(4,9,30,1)),url(Images/dan-cristian-padure-qLByjahQ-SU-unsplash.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
}
nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
}
nav img{
    width: 150px;
}
.nav-links{
    flex: 1;
    text-align: right;
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}
.nav-links ul li a{
    color: rgb(255, 255, 255);
    text-decoration: none;
    font-size: 20px;
}
.nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: #df1f2c;
    display: block;
    margin: auto;
    transition: 0.5s;
}
.nav-links ul li:hover::after{
    width: 100%;

}
.text-box{
    width: 90%;
    color: rgb(255, 255, 255);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}
.text-box h1{
    font-size: 62px;
}
.text-box p{
    margin: 10px 0 40px;
    font-size: 14px;
    color: rgb(255, 255, 255);
}
.hero-btn{
    display: inline-block;
    text-decoration: none;
    color: rgb(255, 255, 255);
    border: 1px solid #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
}
.hero-btn:hover{
    border: 1px solid #df1f2c;
    background: #df1f2c;
    transition: 0.5s;

}

nav .fa{
    display: none;
}

@media(max-width:900px){
    .text-box h1{
        font-size: 20px;
    }
    .nav-links ul li{
        display: block;
    }
    .nav-links{
        position: absolute;
        background: #df1f2c;
        height: 100vh;
        width: 200px;
        top: 0;
        right: -200px;
        text-align: left;
        z-index: 2;
        transition: 1s;
    }
    nav .fa{
        display: block;
        color: #fff;
        margin: 10px;
        font-size: 22px;
        cursor: pointer;
    }
}


/*--service--*/
.service{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 75px;
}
h1{
    font-size: 36px;
    font-weight: 600;
}
p{
    color: #000000;
    font-size: 14px;
    font-weight: 300;
    line-height: 22px;
    padding: 10px;
}
.row{
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
}
.service-col{
    flex-basis: 31%;
    background: #fff4f4;
    border-radius: 10px;
    margin-bottom: 5%;
    padding: 20px 12px;
    box-sizing: border-box;
    transition: 0.5s;
}
h3{
    text-align: center;
    font-weight: 600;
    margin: 10px 0;
}
.service-col:hover{
    box-shadow: 0 0 20px 0px rgba(255, 0, 0, 0.7);
}

@media(max-width: 900px){
    .row{
        flex-direction: column;
    }
}



/*--location--*/
.location{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
}
.location-col{
    flex-basis: 32%;
    border-radius: 10px;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
}
.location-col img{
    width: 100%;
    height: 100%;
    display: block;
}
.layer{
    background: transparent;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transition: 0.5s;

}
.layer:hover{
    background: rgba(255, 33, 33, 0.7);
}
.layer h3{
    width: 100%;
    font-weight: 1000;
    color: #ffffff;
    font-size: 26px;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    position: absolute;
    opacity: 0;
    transition: 0.5s;
}
.layer:hover h3{
    bottom: 49%;
    opacity: 1;
}



/*--contact us--*/
.contact{
    margin: 100px auto;
    width: 80%;
    background-image: linear-gradient(rgba(0,0,0,1),rgba(17, 17, 17, 0.7)),url(Images/banner2.jpg);
    background-position: center;
    background-size: cover;
    border-radius: 10px;
    text-align: center;
    padding: 100px 0;
}
.contact h1{
    color: #fff;
    margin-bottom: 40px;
    padding: 0;

}

@media(max-width: 900px){
    .contact h1{
        font-size: 24px;

    }
}


/*--footer--*/
.footer{
    width: 100%;
    text-align: center;
    padding: 30px 0;
}
.footer h4{
    margin-bottom: 25px;
    margin-top: 20px;
    font-weight: 600;
}
.icons .fa{
    color: #df1f2c;
    margin: 0 13px;
    cursor: pointer;
    padding: 18px 0;
}






/*--About us page--*/
.sub-header{
    height: 50vh;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,1),rgba(241, 49, 49, 0.4)),url(Images/aboutus.jpg);
    background-position: center;
    background-size: cover;
    text-align: center;
    color: #fff;
}
.sub-header h1{
    margin-top: 100px;
}
</style>






<!--JavaScript toggle menu for smaller devices-->
    <script>                                                                 
        var navLinks= document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right="0";
        }
        function hideMenu(){
            navLinks.style.right="-200px";
        }

    </script>

</body>
</html>