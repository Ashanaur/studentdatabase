<?php
session_start();
    include 'main.php';
    $obj = new Main;
    if(isset($_POST['submit'])){
        $u = $_POST['user'];
        $pw = $_POST['pass'];
        $data = $obj->retrive($u);
        if($data->num_rows>0){
            while($row = $data->fetch_object()){
                $uid = $row->id;
                $pass = $row->pass;
            }
        }
        $e_pw = md5($pw);
        if($e_pw === $pass){
            $obj->set_session($uid);            
        }else{
            header("Location: admin.php?no=true");
        }

        if($obj->index()==true){
            header('Location: dashboard.php');
       }
    }else{
        header('location:admin.php');
    }
?>