<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Vairfication</title>
</head>
<body>
    <h1>Email Varification </h1>
    <h2>
        We have send a six digit OTP on <?php
        $user_email = $_POST["email"];
        echo $user_email;
        ?>
    </h2>
        <form action="email-varification.php" method="post">
            <input type="number" class="int-vari" name="user_otp">
            <button> Submit  </button>
            <a href="email-varification.php">Resend it</a>
            <a href="signup.html">Change Email</a>

        </form>
    
</body>
<style>
    button{
        padding: 15px;
        font-size: 25px;
        width:150px;
    }
    form{
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        height: 200px;
        align-items: center;
    }
    body{
        padding: 0%;
        margin: 0;
        box-sizing: border-box;
        align-items:center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .int-vari{
     height: 30px;
     width: 300px;
     padding: 15px;
     border: 2px solid black;
     border-radius: 5px;
     font-size: 25px;
    }
</style>
</html>
<?php
$username = "root";
$password = "";
$db = "user_info-bluebox";
$server = "localhost";
$con = mysqli_connect($server,$username,$password);
if (!$con) {
    echo "connection failed";
}
else{
    echo" connected to server";
}
$user_info = $_POST["user_name"];
$user_email = $_POST["email"];
$pass =$_POST["password"];
$otp = rand(100000 , 999999);

if(isset($_POST['user_otp'])){
    $user_otp = $_POST["user_otp"];
}
 
echo $otp;

$to = $user_email;
$message = "OTP=". $otp ;
$subject = "Your OTP";
$header = "from achyuttripathi@gmail.com";

if($otp===$user_otp){
   echo "<h1> Email verified</h1>" ;
}
else{
    echo "<h1> not verified</h1>";
}


?>
