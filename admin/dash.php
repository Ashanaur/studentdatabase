<?php
    session_start();
    include 'main.php';
    $obj = new Main;
    if(!$_SESSION['userr']){
        header('location:login.php');
    }
    $id = $_SESSION['userr'];
    $show = $obj->single_data($id);
    if($show->num_rows>0){
        while($row = $show->fetch_object()){
            $id = $row->id;            
        }
        header("location:update1.php?id=$id");
    }
?>

