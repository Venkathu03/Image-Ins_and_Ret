<?php

include "image_upload.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Images</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
    <div class="row d-flex justify-content-center">
    <div class="col-lg-6">
    <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <div class="card header">
        <h1 class = "h1 text-center">Upload Images</h1>
        </div>
        <div class="card-body">
        <form action="" method = "post" class = "mt-3" enctype = "multipart/form-data">
        <?php if(!empty($statusMsg)){?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
         <strong>Upload</strong> Successfully....!
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <!-- <p class = "msg <?php echo $status; ?>"><?php echo $statusMsg;  ?></p> -->
       <?php } ?>
            <div class="form-group pt-2">
                <label for="image">Select Image File:</label><br>
                <input type="file" name = "image" class = "form-control" required>
            </div>
            <input type="submit" name = "submit" class = "btn btn-primary mt-3" value = "upload" >
            <input type="reset"  class = "btn btn-danger mt-3" value = "reset">
            <a href="view.php" class = "float-end mt-3"><button type = "button" class = "btn btn-secondary">View Uploaded Images</button> </a>
        </form>
        </div>
    </div>
    </div>
</div>
    </div>

    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

