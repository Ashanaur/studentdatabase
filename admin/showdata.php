<?php
    session_start();
    include 'main.php';
    $obj = new Main;
    $data = $obj->viewdata();
    if(!$_SESSION['user']){
        header('location :admin.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Showdata</title>
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
                    <li><a style="font-family: 'Slabo 27px', serif;" href="dashboard.php">Dashboard</a></li>
                    <li class="active"><a style="font-family: 'Slabo 27px', serif;" href="#">Show Data</a></li>
                    <li><a style="font-family: 'Slabo 27px', serif;" href="#">Search Result</a></li>
                    <li><a style="font-family: 'Slabo 27px', serif;" href="#">Update</a></li>
                </ul>
                <div id="sidebar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>    
        <div class=''><h2 class='text-center text-white pb-3 pt-2 border-top ' style="background:#502096;font-family: 'Slabo 27px', serif;">Student imformation List</h2>
        </div> 
        <?php
            if(isset($_GET['del'])){
                $del = $_GET['del'];
                if($del == true){
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Deleted Successfully</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
                }
            }
        ?>       
        <table class='table table-striped table-dark table-hover bg-dark text-white' style="margin-top:-8px;">
            <form action="searchre.php" method='get'>
                <tr>
                    <td colspan="8"><input type="number" name='search' class="form-control mb-3" placeholder="Type your roll" /></td>
                    <td>
                    <button type="submit" class="btn btn-success">submit</button>
                    </td>
                </tr>
            </form>
            <div>
                <tr class='bg-primary text-white'>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Reg</th>
                    <th scope="col">Technology</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Show Details</th>
                    <th scope="col">Delete</th>
                </tr>
            </div>
            <?php
                if($data->num_rows>0){
                    while($row = $data->fetch_object()){
                        ?>
                        <tr>
                            <td>
                                <?php echo $row->id;?>
                            </td>
                            <td>
                                <?php echo $row->sname;?>
                            </td>
                            <td>
                                <?php echo $row->broll;?>
                            </td>
                            <td>
                                <?php echo $row->reg;?>
                            </td>
                            <td>
                                <?php echo $row->tech;?>
                            </td>
                            <td>
                                <?php echo $row->shift;?>
                            </td>
                            <td>
                            <img class='img-thumbnail' weight='100px' width='100px' src="img/<?php echo $row->photo;?>" alt="">
                            </td>
                            <td scope="col"><button class="btn btn-primary"><a class="text-white" href="update.php?id=<?php echo $row->id; ?>">Show Details</a></button></td>
                            <td scope="col"><button class="btn btn-danger mr-2"><a class="text-white" href="delete.php?id=<?php echo $row->id; ?>">Delete</a></button></td>
                        </tr>    
                    <?php
                        }
                    }
                ?>
        </table>
        <footer style="margin-top:320px;">
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