<?php
    include "main.php";
    $del = new Main;
    $id = $_GET['id'];
    if($del->delete($id)){
        header('location:showdata.php?del=true');
    }else{
        echo 'error';
    }
?>