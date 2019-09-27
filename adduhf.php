<?php 
require 'includes/snippet.php';
require 'includes/db-inc.php';
include "includes/header.php"; 

if(isset($_POST['submit'])) {

    $uhf_id = sanitize(trim($_POST['uhf_id']));
    $uhf_name = sanitize(trim($_POST['uhf_name']));
    $uhf_type = sanitize(trim($_POST['uhf_type']));
    $uhf_version = sanitize(trim($_POST['uhf_version']));
    $image ='image/'.$_FILES['image']['name'];
    $image = mysqli_real_escape_string($conn,$image);
    if (preg_match("!image!", $_FILES['image']['type'])) {
        if (copy($_FILES['image']['tmp_name'], $image)) {
            
        

        
    



// if (isset($_FILES['postimg'])) {
//         $img_size = $_FILES['postimg']['size'];
//         $temp = $_FILES['postimg']['tmp_name'];
//         $img_type = $_FILES['postimg']['type'];
//         $img_name = $_FILES['postimg']['name'];


//         if ($img_size > 500000) {
//             $err_flag = true;
//             $error = "Your image size is too big... Try again.";
//         }

//         $extensions = array('jpg', 'jpeg', 'png', 'gif');
//         $img_ext = explode('/', $img_type);
//         $img_ext = end($img_ext);
//         $img_ext = strtolower($img_ext);
//         if (!(in_array($img_ext, $extensions))) {
//             $err_flag = true;
//             $error = "Unwanted image file type... Only jpg,jpeg,png and gif allowed";
//         }
//         // Prepare image folder in the server
//         $imgFile = 'library-images/';
//         $filename = rand(1000, 8000) . '_' .time() . '.' . $img_ext;
//         $filepath = $imgFile . $filename;
//         // if (isset($err_flag) && $err_flag === false) {
//         //     $result = move_uploaded_file($temp, $filepath);
//         //     if ($result) {
//         //         $magicianObj = new imageLib($filepath);
//         //         $magicianObj -> resizeImage(100, 100);
//         //         $magicianObj -> saveImage($imgFile . 'thumbnails/' . $filename, 100);
//         //         $img_path = $imgFile.$img_name;
//         //     }
//         // }
//     }

//     // echo $filename;



         $sql = "INSERT INTO uhf( uhf_name, uhf_type, uhf_version,uhf_photo)
 VALUES ( '$uhf_name', '$uhf_type', '$uhf_version','$image') ";

      $query = mysqli_query($conn, $sql);
      $error = false;
      if($query){
       $error = true;
      }
      else{
        echo "<script>alert('Not Registered successful!! Try again.');
                    </script>"; 
      }
   
   }
}
    

}

?>


<div class="container">
    <?php include "includes/nav.php"; ?>
    
    <div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " style="margin-top: 20px">
        <div class="jumbotron login3 col-lg-10 col-md-11 col-sm-12 col-xs-12">

              <?php if(isset($error)===true) { ?>
        <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Record Added Successfully!</strong>
            </div>
            <?php } ?>
        
            <p class="page-header" style="text-align: center">ADD UHF SIGNAL EQUIPMENT</p>

            <div class="container">
                <form class="form-horizontal" role="form" action="adduhf.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Username" class="col-sm-2 control-label">FULL NAME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="uhf_name" placeholder="Full name" id="uhf_name" required>
                        </div>      
                    </div>
                    <div class="form-group">
                        <label for="Password" class="col-sm-2 control-label">TYPE </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="uhf_type" placeholder="HF/VHF/UHF" id="uhf_type" required>
                        </div>      
                    </div>
                    <div class="form-group">
                        <label for="Password" class="col-sm-2 control-label">VERSION</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="uhf_version" placeholder="Manpack/Vehilce/Base Station" id="uhf_version" required>
                        </div>      
                    </div>
                    

                        
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">IMAGE</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="image" placeholder="Enter image" id="password" style="padding: 0" required>
                        </div>      
                    </div>
                    
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button  class="btn btn-info col-lg-12" data-toggle="modal" data-target="#info" name="submit">
                                ADD HF SETS
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
		var input = document.getElementById('hf_name').focus();
	}
 </script>
</body>
</html>