<?php
	session_start();
		if(!isset($_SESSION['user']))
		{
			header("Location: vit.php");
		}
		if($_SESSION['user']=='student_int' )
    {
      header("Location: index_student_intern.php");
    }
    if($_SESSION['user']=='student_place' )
    {
      header("Location: index_student_placement.php");
    }
		if($_SESSION['user']=='company')
		{
			header("Location: index_company.php");
		}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Index</title>
  <link rel="stylesheet" type="text/css" href="1.css"> 
  <link rel="shortcut icon" type="image/png" href="head_logo.jpeg">
  <link rel="stylesheet" type="text/css" href="stl.css">
</head>
<body >
  <div class="list-unstyled3" >
          <ul>
            <li><a href="vit.php"><img src="vit.jpg" alt="CUSAT Kochi"  class="logo2" height="40"  align="left"/></a></li>
              <li style="float:right"><a  href="logout.php" title="<?php echo $_SESSION['admin_name']; ?> ">Log Out</a></li> 
	
            <div class="para">
            <p> Training &amp; Placement, CUSAT Kochi</p>
                </div>  
                   </ul>
          
        </div>
<!--		
  <div class="header">
  	<h3> <a style="color:white "href="profile_student2.php">View Profile</a></h3>
  </div>
  <div class="header">
    <h3> <a style="color:white "href="profile_student_update_place.php">Update Profile</a></h3>
  </div>  -->

<div class="index_admin">
				
				<ul class="list-unstyled5 list-horizontal-layout right-align">
						<a href="admin_company_approval.php" class="btn5 ">Company Approval</a>
						<a href="admin_student_status.php" class="btn4">Change Student Status</a>
						
						
				</ul>
				<ul class="list-unstyled5 list-horizontal-layout right-align">
					    <a href="admin_register_admin.php" class="btn9">Add Admin</a>
						<a href="admin_notification.php" class="btn9">Data</a>
						
						
				</ul>
				
</div>

<div class="col-sm-4">
				<h3 class="mg-md  text-right tc-dim-gray">
					Training &amp; Placement Office
				</h3>
				<p class="text-right">
				CUSAT Placement Cell <br> SOE (Old Block) <br>  CUSAT, Thrikkakara <br> Kochi, Kerala-682022
				</p>
			</div> 
</body>
</html>
<?php
 //header("Location: logout.php");

?>