<?php
    session_start();
    include 'main.php';
    $obj = new Main;
    if(!$_SESSION['user'] == true){
        header('location: admin.php');
        //echo 'error';
    }   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    </head>
    <body>
        <div class="row row1">  
             <h3 class='mm' style="margin-left:auto; margin-top:7px;"><a class="sty" style="text-decoration: none; font-family: 'Slabo 27px', serif;" href="logout1.php?logout=1">Logout</a></h3>
            <div id="sidebar">
                <ul id="menu">
                    <li class="active"><a style="font-family: 'Slabo 27px', serif;" href="#">Dashboard</a></li>
                    <li><a style="font-family: 'Slabo 27px', serif;" href="showdata.php">Show Data</a></li>
                    <li><a style="font-family: 'Slabo 27px', serif;" href="showdata.php">Search Result</a></li>
                    <li><a style="font-family: 'Slabo 27px', serif;" href="showdata.php">Update</a></li>
                </ul>
                <div id="sidebar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>   
            </div>
        </div> 
            <div class=''><h2 class='text-center text-white pb-3 pt-2 mb-5 border-top ' style="background:#502096;font-family: 'Slabo 27px', serif;">Welcome to Admin Panel</h2>
            </div>    
            <div class="row">
                <div class="col-md-3 m-auto pb-5 pt-4" style="-moz-box-shadow: 0 0 5px 5px #888; -webkit-box-shadow: 0 0 5px 5px#888; box-shadow: 0 0 24px 9px #544f82f2;border-radius: 10px 10px;">
                <div>
                    <h2 class='text-center' style="font-family: 'Slabo 27px', serif;">Add Student</h2>
                </div>
                    <?php
                        if(isset($_POST['submit'])){
                        $roll = $_POST['roll'];
                        $reg = $_POST['reg'];
                       $status = $obj->insert($roll,$reg);
                       if($status == true){
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>inserted Successfully!</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <?php
                       }else if($status == false){
                        ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Already have this!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <?php
                       }
                    
                        }
                    ?>
                    <form action="#" method="post">
                        <input type="number" class='form-control mb-2' min='100000' max='999999' name='roll' placeholder='Enter Roll.'>
                        <input type="number" class='form-control mb-2' min='100000' max='999999' name='reg' placeholder='Enter Reg.'>
                        <input type="submit" class='btn btn-primary btn-lg btn-block mt-4' name='submit'>
                    </form>
                </div>
            </div>
            <footer style="margin-top:293px;">
        		<div class="pt-5 pb-5" style='background: #1C1C34;'><!--  footer start -->
        			<div class="container">
        				<div class="row">
        					<div class="col-md-12 col-sm-12">
        						<h4 class="text-center text-white" style="font-family: 'Slabo 27px', serif;">&copy;Copyrights 2018. All rights reserved by:<a href="ashanur.xyz"> ashanur.xyz</a></h4>
        					</div>
        				</div>
        			</div>
        		</div>
        	</footer>     
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        	<script>
        	$(document).ready(function(){
        		$('#sidebar-btn').click(function(){
        			$('#sidebar').toggleClass('visible');
        		});
        	});
        	</script>
    </body>
</html>