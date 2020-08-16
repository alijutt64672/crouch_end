<?php 

    include_once('db/connection.php');
    include_once('includes/header_start.php');
    
if(isset($_POST['submit'])){

    $title = $_POST['title'];
    echo $description = $_POST['description'];
    $query = "INSERT INTO posts (title,description,featured) VALUES ('$title','$description',1)";
    $result = mysqli_query($conn,$query); 
    
}
    // if(!isset($_SESSION['login_user']) || $_SESSION['login_user']==""){         
    //     echo "<script>window.location.href='index.php';</script>";
    // }
    // $id=$_SESSION['login_user'];
    // $msg="";    

  
    //     if(!empty($_FILES)){ 


    //         $allowed = array('jpeg', 'png', 'jpg');
    //         $image_ext = $_FILES['file']['name'];
    //         $ext = pathinfo($image_ext, PATHINFO_EXTENSION);

    //         if (!in_array($ext, $allowed)) {
    //            $msg="Image must be in JPg / PNG format";
    //         }

    //         else{
    //             $image_Name = uniqid().date("Y-m-d-H-i-s").$_FILES['file']['name'];
               
    //             // File path configuration 
    //             $uploadDir = "../portfolio_images/"; 
    //             $fileName = basename($_FILES['file']['name']); 
    //             $uploadFilePath = $uploadDir.$image_Name; 
                 
    //                 // Upload file to server 
    //                 if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)){ 
    //                     // Insert file information in the database 
    //                     $insert = mysqli_query($conn,"INSERT INTO portfolio (vendor_id, image) VALUES ('$id','".$image_Name."')"); 
    //                }
    //         }        
    //      } 
      

?>

<!-- <link href="assets/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css"> -->

<?php include_once('includes/header_end.php'); ?>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Create Post</h3>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </nav>

                    </div>
                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->
                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Create Post</h4>
                                            <form method="POST" action="">
                                                <div class="form-group row mt-4">
                                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="title" id="title" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4"></div>
                                                    <div class="col-sm-2 text-right">
                                                        <input type="submit" class="btn btn-outline-success waves-effect waves-light" name="submit" style="width: 100%" value="Add Images">
                                                    </div>
                                                    <div class="col-sm-2 text-left">
                                                        <a  style="width: 100%" href="Dashboard.php" class="btn btn-outline-danger waves-effect waves-light">Cancel</a>
                                                    </div>
                                                    <div class="col-sm-4"></div>
                                                </div>
                                            </form>
                                            <div class="modal fade bs-example-modal-center" id="modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0">Upload Images</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <form action="" class="dropzone" >
                                                                        <div class="fallback">
                                                                            <input name="file" type="file" multiple="multiple">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 text-center mt-4">
                                                                    <button type="button" class="btn btn-outline-success waves-effect waves-light" data-dismiss="modal" aria-hidden="true">Create Post</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div><!-- container -->
                    </div> <!-- Page content Wrapper -->

<?php include_once('includes/footer_start.php'); ?>
<!-- <script src="assets/plugins/dropzone/dist/dropzone.js"></script>
<script>
Dropzone.autoDiscover = false;

$(function() {
    var myDropzone = new Dropzone(".dropzone", {
        url: "portfolio.php",
        paramName: "file",
        maxFilesize: 2,
        maxFiles: 20,
        acceptedFiles: "image/*"
    });
});
</script> -->

<?php include_once('includes/footer_end.php'); ?>