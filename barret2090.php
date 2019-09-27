<?php 
        require 'includes/snippet.php';
    require 'includes/db-inc.php';
    include "includes/header.php";

    // echo "Hello Uche";

    if (isset($_POST['submit'])) {
        //Getting the values from the forms
        $function_name = sanitize(trim($_POST['function_name']));
        
      
    
        //create an sql statement
        $sql =
         "INSERT INTO barret2090_funtion( function_name) VALUES ('$function_name')";
         
        //query the database
        $query = mysqli_query($conn, $sql);
        $error = false;

        if ($query) {
        $error = true;
        }
        else {
        echo "<script>alert('function not added!');
                    </script>"; 
        }

     }

       
        
    

 ?> 
 <?php
  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a href='$url'>back</a>"; 
?>

<div class="container">
    <?php include "includes/nav.php"; ?>
    <div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " style="margin-top: 30px">
        <div class="jumbotron login col-lg-10 col-md-11 col-sm-12 col-xs-12">
            <?php if(isset($error)) { ?>
        <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Function Added Successfully!</strong>
            </div>
            <?php } ?>
            <p class="page-header" style="text-align: center">ADD BARRET 2090 FUNCTIONS</p>

            <div class="container">
                <form class="form-horizontal" role="form" method="post" action="barret2090.php" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="Name" class="col-sm-2 control-label">Function Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="function_name" placeholder="Enter Full Function Name"  required>
                        </div>      
                    </div>
                    
                    <div class="form-group ">
                        <div class="col-sm-offset-2 col-sm-10 ">
                            <button type="submit" class="btn btn-info col-lg-4 " name="submit">
                                Submit
                            </button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
    window.onload = function () {
        var input = document.getElementById('function_name').focus();
    }
 </script>
</body>
</html>