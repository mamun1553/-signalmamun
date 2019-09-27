s<?php 
require 'includes/snippet.php';
	require 'includes/db-inc.php';
include "includes/header.php"; 

	// if (isset($_POST['submit'])) {
	// 	$id = trim($_POST['del_btn']);
	// 	$sql = "DELETE from barret2090_function where b2090_id = '$id' ";
	// 	$query = mysqli_query($conn, $sql);

	// 	if ($query) {
	// 		echo "<script>alert('function  Deleted!')</script>";
	// 	}
	// }

?>


<div class="container">
    <?php include "includes/nav2.php"; ?>
	<!-- navbar ends -->
	<!-- info alert -->
	<div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:70px">

		<span class="glyphicon glyphicon-book"></span>
	    <strong><b>BARRET 2090 FUNTION LIST</b></strong> Table
	</div>
	<!-- <div class="alert alert-info col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px">
		<button class="btn btn-success" style="float: left"><span class="glyphicon glyphicon-plus-sign"></span> Add Button</button>
		
	    <form class="form-vertical col-lg-6 col-md-6 col-sm-6 col-xs-12" role="form" style="float: right">
	    	<div class="form-group ">
				<label for="Username" class="col-lg-8 col-md-2 col-xs-8 col-sm-8 control-label">Search User</label>
				<div class="col-lg-12 col-md-12 col-sm-10 col-xs-12  ">
							<input type="text" class="form-control" name="username" placeholder="Enter Username" id="username">
				</div>		
			</div>
	    </form>
    </div> -->
	   
	   


	</div>
	<div class="container col-lg-11 ">
		 <table class="table table-bordered">
		          <thead>
		               <tr>
		               	  <th>S/N</th> 
		                  <th>FUNCTION NAME</th>
		       
		                  <th>Action</th>
		                </tr>    
		          </thead>    
		          <?php 

		          $sql = "SELECT * FROM barret2090_funtion" ;
		          $query = mysqli_query($conn, $sql);
		          $counter = 1;
		          while ( $row = mysqli_fetch_assoc($query)) {        	
		           ?>
		          <tbody> 
		            <tr> 
		             <td><?php echo $counter++; ?></td>
		             <td><?php echo $row['function_name']; ?></td>
		                         
		             <td>
		             	<!-- <form action="viewbarret2090.php" method="post">
		             	<input type="hidden" value="<?php echo $row['b2090_id']; ?>" name="del_btn">
		                <button name="submit" class="btn btn-warning">DELETE</button>
		                </form>  -->
		                <li><a href="1.html" target="_blank">ENTER</a></li>
		             </td>
		            </tr> 
		           
		         </tbody> 
		         <?php } ?>
		   </table>
			 
	  </div>
	</div>
	


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>	
<script type="text/javascript">
function hey(){
	alert("Hello");
}
</script>
</body>
</html>