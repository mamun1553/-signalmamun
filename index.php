<?php
// session_start(); 
// session_destroy();
// if (!(isset($_SESSION['auth']) && $_SESSION['auth'] === true)) {
// 	header("Location: admin.php?access=false");
// 	exit();
// }
// else {
 	// $admin = $_SESSION['admin'];
// }
require 'includes/snippet.php';
require 'includes/db-inc.php';
 include "includes/header.php";

	// if(isset($_SESSION['admin'])){
	// 	$admin = $_SESSION['admin'];
	// 	// echo "Hello $user";
	// }

 if(isset($_POST['submit'])){

    $news = sanitize(trim($_POST['news']));

    $sql = "INSERT into news (announcement) values ('$news')"; 

    $query = mysqli_query($conn,$sql);
    $error = false;

       if($query){
       $error = true;
      }
      else{
        echo "<script>alert('Not successful!! Try again.');
                    </script>"; 
      }
 }

     if(isset($_POST['UpDat'])){
		$id = sanitize(trim($_POST['id']));
        $text = sanitize(trim($_POST['text']));

        $sql_up = "UPDATE news set announcement = '$text' where newsId = '$id'";
		echo mysqli_error($sql_up);
         $result = mysqli_query($conn,$sql_del);
                if ($result)
                {
                    echo "<script>
            
           
                   alert('Update successful');

         </script>";
                }


     }

     if(isset($_POST['del'])){

        $id = sanitize(trim($_POST['id']));

        $sql_del = "DELETE from news where newsId = $id"; 

        $result = mysqli_query($conn,$sql_del);
                if ($result)
                {
         //            echo "<script>
            
         //    var response = confirm('Would you like to delete the user');
         //    if (response == true) {
         //        alert('User was successfully deleted from the database');
         //            location.href ='admin.php';
         //    }   

         //    else
         //        {
         //            alert('Could not delete user');
         //        }
            

         // </script>";
                }

     }






  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="flickity/flickity.css">
	<script type="text/javascript" src="flickity/flickity.js"></script>
	<title>SIGNAL EQUIPMENT SIMULATOR CREATOR</title>

</head>
<body>
<div  style="overflow: hidden ;background-color: #333; font-size: 20px;">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example">
					<span class="sr-only">:</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">SIGNAL EQUIPMENT SIMULATOR CREATOR</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example">
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

</div>

		<div class="container-fluid slide">
			
	  		<div class="slider">
	  			<!-- <h1>Flickity - wrapAround</h1> -->


					<div class="carousel" data-flickity='{ "autoPlay": true }'; >

						  <div class="carousel-cell" auto-play >
						  	<img src="ify/1.jpg">
						  </div>
						  
					</div>

					

	  		</div>
		</div>

			  <!-- Default panel contents -->
	





		<div class="container slide2">
			
			  <div class="panel-heading">
		  	<div class="row">
		  		<h3 class="center-block" style="font-size: 30px;">Published Announcements</h3>
			</div>
		  </div>
		  <table class="table table-bordered" style="font-size: 18px;">
         

      		<thead>
                <tr>
                    <th>NewsId</th>
                         <th>Announcement</th>
                          
                        
                </tr>
          </thead>

           <?php 

          $sql2 = "SELECT * from news";

      $query2 = mysqli_query($conn, $sql2);
      $counter = 1;
      while ($row = mysqli_fetch_array($query2)) {  ?>


        <tbody >
          <td><?php echo $counter++; ?></td>
          <td><?php echo $row['announcement']; ?></td>
        
        </tbody>

     <?php }
           ?>
		        
		         </tbody> 
		   </table>
		 
	  </div>

			
			</div>
	</div>




		<div class="container-fluid slide3" style="background-color: #282828">
			<div class="container">
				<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<a href="#" class="thumbnail">
						<img src="ify/9.jpg">
					</a>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<a href="#" class="thumbnail">
						<img src="ify/1.jpg">
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<a href="#" class="thumbnail">
						<img src="ify/2.jpg">
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<a href="#" class="thumbnail">
						<img src="ify/4.jpg">
					</a>
				</div>
			</div>
			</div>
			
		</div>
		
<div class="container-fluid slide3" style="background-color: #282828">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="mapouter">
						<div class="gmap_canvas">
							<iframe width="667" height="307" id="gmap_canvas" 
							src="https://maps.google.com/maps?q=signal%20traing%20center%20and%20school%20&t=&z=13&ie=UTF8&iwloc=&output=embed" 
							frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
						</iframe>
					</div>
					<style>.mapouter{position:relative;text-align:right;height:307px;width:667px;}
					.gmap_canvas {overflow:hidden;background:none!important;height:307px;width:667px;}
					</style>
				</div>
			</div>
			<div class="col-sm-4" style="color:red;">		
				<div class="contact-details">
					<h6>Contact details</h6>
					<p><i class="fa fa-phone fa-lg" aria-hidden="true"></i> 01234 567890</p>
					<p><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact us</a></p>
					<p><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> Street, City, County, Country</p>
				</div>     
				<div class="social">
					<i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
					<i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
					<i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
					<i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
				</div>
			</div>

		</div>
	</div>
	
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>