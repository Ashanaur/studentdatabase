<?php
session_start();
    include 'main.php';
    $obj = new Main;
    if(isset($_POST['submit'])){
        $br = $_POST['broll'];
        $reg = $_POST['reg'];
        $data = $obj->retriv1($br);
        if($data->num_rows>0){
            while($row = $data->fetch_object()){
                $uid = $row->id;
                $re = $row->reg;
            }
        }
        if($reg === $re){
            $obj->set_session1($uid);            
        }else{
            header("Location: login.php?no=true");
        }

        if($obj->index1()==true){
            header('Location: dash.php');
       }
    }else{
        header('location:login.php');
    }



?>