<?php
    include 'main.php';
    $obj = new Main;
    $id = $_GET['id'];
    $data = $obj->single_data($id);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Update imformation</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
        <link rel="stylesheet" type="text/css" href="css/update.css" />
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
                    <li><a style="font-family: 'Slabo 27px', serif;" href="showdata.php">Show Data</a></li>
                    <li><a style="font-family: 'Slabo 27px', serif;" href="showdata.php">Search Result</a></li>
                    <li class="active"><a style="font-family: 'Slabo 27px', serif;" href="#">Update</a></li>
                </ul>
                <div id="sidebar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div> 
    <div class=''><h2 class='text-center text-white pb-3 pt-2 border-top ' style="background:#502096;font-family: 'Slabo 27px', serif;">Update Imfomation</h2>
    </div> 
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2 class='text-center' style="font-family: 'Slabo 27px', serif;">Faridpur Polytechnic Institute,Faridpur</h2>
                    <h3 class='text-center' style="font-family: 'Slabo 27px', serif;">Student Registation Form</h3>
                    <hr>
                    <?php
                        if(isset($_GET['update'])){
                            $update = $_GET['update'];
                            if($update == true){
                             ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Update Successfully</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php
                            }else if($update == false){
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>update Failed</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php
                                }
                            }
                        ?>
                    <form class="pt-3" action="uinsert.php" method='post'  enctype='multipart/form-data'>
                        <?php
                            if($data->num_rows>0){
                                while($row = $data->fetch_object()){
                                ?>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Stadent's Name:</label>
                                <input type="text" class='form-control mb-2' value="<?php echo $row->sname;?>" name='sname' id='name' />
                                <label for="fname">Father's Name:</label>
                                <input type="text" class='form-control mb-2' value="<?php echo $row->fname;?>" name='fname' id='fname' />
                                <label for="mname">Mother's Name:</label>
                                <input type="text" class='form-control mb-2'  value="<?php echo $row->mname;?>" name='mname' id='mname' />
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Choose Photo:</label>
                                    <input type="file" name="file" class="form-control-file mb-2" id="exampleFormControlFile1">
                                </div>
                                <img class='img-thumbnail wid' src="img/<?php echo $row->photo;?>" alt="ashanur.jpg">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class='col-md-6'>
                                <label for="tech">Technology:</label>
                                <select class="form-control mb-2" name="tech" id="tech">
                                    <option>Select Technology</option>
                                    <option value="Computer" <?php if($row->tech == "Computer"){echo "selected";}?>>Computer</option>
                                    <option value="Power" <?php if($row->tech == "Power"){echo "selected";}?>>Power</option>
                                    <option value="Machnical" <?php if($row->tech == "Machnical"){echo "selected";}?>>Machnical</option>
                                    <option value="Electrical" <?php if($row->tech == "Electrical"){echo "selected";}?>>Electrical</option>
                                    <option value="RAC" <?php if($row->tech == "RAC"){echo "selected";}?>>RAC</option>
                                    <option value="Civil" <?php if($row->tech == "Civil"){echo "selected";}?>>Civil</option>
                                </select>
                                <label for="shift">Shift:</label>
                                <select class="form-control mb-2" name="shift" id="shift">
                                    <option>Select Shift</option>
                                    <option value="1st" <?php if($row->shift == "1st"){echo "selected";}?>>1st</option>
                                    <option value="2nd" <?php if($row->shift == "2nd"){echo "selected";}?>>2nd</option>
                                </select>
                                <label for="broll">Board Roll:</label>
                                <input type="number" class='form-control mb-2' value="<?php echo $row->broll;?>" name='broll' id='broll' readonly />
                                <label for="reg">Reg No:</label>
                                <input type="number" class='form-control mb-2' value="<?php echo $row->reg;?>" name='reg' id='reg' readonly />
                            </div>
                            <div class='col-md-6'>
                                <label for="semis">Semister:</label>
                                <select class="form-control mb-2" name="semis" id="semis">
                                    <option>Select Semister</option>
                                    <option value="1st" <?php if($row->semis == "1st"){echo "selected";}?>>1st</option>
                                    <option value="2nd" <?php if($row->semis == "2nd"){echo "selected";}?>>2nd</option>
                                    <option value="3rd" <?php if($row->semis == "3rd"){echo "selected";}?>>3rd</option>
                                    <option value="4th" <?php if($row->semis == "4th"){echo "selected";}?>>4th</option>
                                    <option value="5th" <?php if($row->semis == "5th"){echo "selected";}?>>5th</option>
                                    <option value="6th" <?php if($row->semis == "6th"){echo "selected";}?>>6th</option>
                                    <option value="7th" <?php if($row->semis == "7th"){echo "selected";}?>>7th</option>
                                    <option value="8th" <?php if($row->semis == "8th"){echo "selected";}?>>8th</option>
                                </select>
                                <label for="croll">Class Roll:</label>
                                <input type="number" class='form-control mb-2' value="<?php echo $row->croll;?>" name='croll' id='croll' />
                                <label for="birth">Date of Birth:</label>
                                <input type="text" class='form-control mb-2' value="<?php echo $row->birth;?>" name='birth' id='birth' />
                                <label for="sess">Session:</label>
                                <input type="text" class='form-control mb-2' value="<?php echo $row->session;?>" name='session' id='sess' />
                            </div>
                        </div>
                        <label for="padd">Permanent Address:</label>
                        <textarea name="padd" class='form-control mb-2' id="padd" cols="10" rows="3"><?php echo $row->padd;?></textarea>
                        <label for="ppadd">Present Address:</label>
                        <textarea name="ppadd" class='form-control mb-2' id="ppadd" cols="10" rows="3"><?php echo $row->ppadd;?></textarea>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="mob">Mobail No:</label>
                                <input type="number" class='form-control mb-2' value="<?php echo $row->mob;?>" id='mob' name='mob' />
                                <label for="blood">Blood Group:</label>
                                <input type="text" class='form-control mb-2' value="<?php echo $row->blood;?>" id='blood' name='blood' />
                            </div>
                            <div class="col-md-6">
                                <label for="em">Email No:</label>
                                <input type="email" class='form-control mb-2' value="<?php echo $row->email;?>" id='em' name='email'/>
                                <label for="re">Religion:</label>
                                <input type="text" class='form-control mb-2' value="<?php echo $row->religion;?>" id='re' name='religion' />
                            </div>
                        </div>
                        <input type="hidden" name='id' value="<?php echo $row->id;?>">
                        <div class="row mb-5 mt-3">
                            <div class="col-md-6">
                                <input class='btn btn-success btn-lg btn-block' type="submit" name='submit'>
                            </div>
                            <div class="col-md-6">
                                <input class='btn btn-danger btn-lg btn-block' type="reset" value='Clear' name=''>
                            </div>
                        </div>
                        <?php
                            }
                        }
                    ?>
                    </form>
                </div>
            </div>
        </div>
        <footer>
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