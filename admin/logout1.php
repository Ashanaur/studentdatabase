<?php
    session_start();
    if(isset($_GET['logout'])){
        if($_GET['logout']==1){
            session_destroy(); 
            header('Location: admin.php');
        }else if($_GET['logout']==3){
            session_destroy(); 
            header('Location: login.php');
        }
    }
?>