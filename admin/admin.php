<?php
    session_start();
    include 'main.php';
    $obj = new Main;
    if(isset($_SESSION['user'])){
        header('Location: dashboard.php');
      }  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Login</title>
        <link rel="stylesheet" type="text/css" href="css/sstyle2.css" />
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    </head>
    <body style="background:url('img/admin.jpg');background-size: cover;background-attachment: fixed;background-position: center; background-repeat: no-repeat;"> 
        <form class="box" action="auth.php" method="post" style="-moz-box-shadow: 0 0 5px 5px #888;-webkit-box-shadow: 0 0 5px 5px#888;box-shadow: 0 0 24px 9px #dfe4f1f2;border-radius: 10px 10px;  background: #191919b8;">
			<h1 style="font-family: 'Slabo 27px', serif;">Admin Login</h1>
            <?php
                if(isset($_GET['no'])){
                    $no = $_GET['no'];
                    if($no == true){
                ?>
                <div><i style="color:red;text-shadow:1px 1px 3px #000;">don't match</i></div>
                <?php
                    }
                }
            ?>
			<input type="text" name="user" placeholder="Username" required="">
			<input type="password" name="pass" placeholder="Password" required="">
			<input type="submit" name="submit" value="Login">
		</form>
    </body>
</html>