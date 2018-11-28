<?php
    include 'main.php';
    $obj = new Main;
    if(isset($_POST['submit'])){
        if (isset($_GET['role'])){$role = $_GET['role'];}
        $sname = $_POST['sname'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $tech = $_POST['tech'];
        $shift = $_POST['shift'];
        $broll = $_POST['broll'];
        $reg = $_POST['reg'];
        $semis = $_POST['semis'];
        $croll = $_POST['croll'];
        $birth = $_POST['birth'];
        $session = $_POST['session'];
        $padd = $_POST['padd'];
        $ppadd = $_POST['ppadd'];
        $mob = $_POST['mob'];
        $blood = $_POST['blood'];
        $email = $_POST['email'];
        $religion = $_POST['religion'];
        if($_FILES['file']['name'] != ''){
            $folder = "img/";
            $id = $_POST['id'];
            $imgfile = $folder.basename($_FILES['file']['name']);
            if(move_uploaded_file($_FILES['file']['tmp_name'],$imgfile)){
                $image = $_FILES['file']['name'];
                $status = $obj->allupdate($sname,$fname,$mname,$image,$tech,$shift,$broll,$reg,$semis,$croll,$birth,$session,$padd,$ppadd,$mob,$blood,$email,$religion,$id);
                if($role == 1){
                    if($status == true){
                        header('location:update1.php?id='.$id.'&update=true'); 
                    }else{
                        header('location:update1.php?id='.$id.'&update=false'); 
                    }
                }else{
                    if($status == true){
                        header('location:update.php?id='.$id.'&update=true'); 
                    }else{
                        header('location:update.php?id='.$id.'&update=false'); 
                    }
                }   
            }
        }else{
            $id = $_POST['id'];
            $status = $obj->update($sname,$fname,$mname,$tech,$shift,$broll,$reg,$semis,$croll,$birth,$session,$padd,$ppadd,$mob,$blood,$email,$religion,$id);
            
            if($role == 1){
                if($status == true){
                    header('location:update1.php?id='.$id.'&update=true'); 
                }else{
                    header('location:update1.php?id='.$id.'&update=false'); 
                }
            }else{
                if($status == true){
                    header('location:update.php?id='.$id.'&update=true'); 
                }else{
                    header('location:update.php?id='.$id.'&update=false'); 
                }
            } 
        }
        // header('location:update.php');
    }
?>