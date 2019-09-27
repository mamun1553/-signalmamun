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
    <?php include "includes/nav.php"; ?>
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
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">
		  	<div class="row">
		  	  <a href="barret2090.php"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 15px;margin-bottom: 5px"><span class="glyphicon glyphicon-plus-sign"></span> Add Barret-2090 Radio Set Function</button></a>
			  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right">
			  	<!-- <form >
			  		<div class="input-group pull-right">
				      <span class="input-group-addon">
				        <label>Search</label> 
				      </span>
				      <input type="text" class="form-control" onkeyup="hey()">
			      </div>
			  	</form> -->
			    
			  </div><!-- /.col-lg-6 -->
  
			</div>
	</div>
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
	<div class="mod modal fade" id="popUpWindow">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<!-- header begins here -->
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h3 class="modal-title"> Warning</h3>
        			</div>

        			<!-- body begins here -->
        			<div class="modal-body">
        				<p>Are you sure you want to delete this Member?</p>
        			</div>

        			<!-- button -->
        			<div class="modal-footer ">
        				<button class="col-lg-4 col-sm-4 col-xs-6 col-md-4 btn btn-warning pull-right"  style="margin-left: 10px" class="close" data-dismiss="modal">
        					No
        				</button>&nbsp;
        				<button class="col-lg-4 col-sm-4 col-xs-6 col-md-4 btn btn-success pull-right"  class="close" data-dismiss="modal" data-toggle="modal" data-target="#info">
        					Yes
        				</button>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="modal fade" id="info">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<!-- header begins here -->
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h3 class="modal-title"> Warning</h3>
        			</div>

        			<!-- body begins here -->
        			<div class="modal-body">
        				<p>Member deleted <span class="glyphicon glyphicon-ok"></span></p>
        			</div>

        		</div>
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