<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Storage-Signin</title>
    <link rel="stylesheet" href="DSSave.css">
    <link rel="icon" type="image/png" href="DSLogo.png">
</head>
<body>
<img src="DSLogo.png" id="logo_S">
    <label id="title">Data Storage</label>
    
    <img src="DSLogoL.png" id="logo_L">
    <label id="Text1"></label><br>
    <form action="https://jfcc-official-company-website.on.drv.tw/www.DataStorage.tx/Downloader.html?">
    <button id="dowB">DOWNLOAD</button>
    </form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['submit'])){
    $conn=mysqli_connect('localhost','root','','users') or die("Connection Failed".mysqli_connect_error());
    if(isset($_POST['name'])&&isset($_POST['email'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $sql="INSERT INTO `users` (`FullName`,`Email`) VALUES ('$name', '$email')";
        $query=mysqli_query($conn,$sql);
        if($query){
            echo"<script type='text/javascript'>";
echo"parent.document.getElementById('Text1').innerHTML = 'Thanks for signing in!';";
echo "</script>";
        }
        else{
            echo"<script type='text/javascript'>";
echo"parent.document.getElementById('Text1').innerHTML = 'Error has occurred!';";
echo "</script>";
        }
    }
}

?>