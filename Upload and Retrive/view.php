<?php

require_once "connect.php";

$sql = "SELECT File_Name FROM images ORDER BY Id DESC";
$result = $con->query($sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Images</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <style>
    a{
        text-decoration: none;
    color: cadetblue;
    font-family: cursive;
}
    button{
        
    font-size: 20px;
    margin-top: 5px;
    background: cornsilk;
    border-radius: 17px;
    border-style: none;
    padding: 8px;
    transition : 0.3s;
    }
    button:hover{
        transform : scale(1.05);
        /* border : solid 1px #275556; */
        transition : 0.3s;
    }
    img{
        width : 300px;
    }
  </style>
  <body>
    <div class="container ">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-12 ">
                <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header sticky-top bg-white">
        <h1 class = "h1 text-center">Retrived Images <button class = "float-end"><a  href="index.php">Upload images</a></button></h1>
        
        </div>
        <div class="card-body" >
            <div>
        <div class = "table-responsive" >
                <?php if($result->num_rows > 0){?>
                    <div class = "img-box">
                        <?php while($row = $result->fetch_assoc()){ ?>
                            <img class = "figure-img img-thumbnail" src = "data:File_Name/jpg;charset=utf8;base64,<?php echo base64_encode($row["File_Name"]);?>"/>
                            <?php } ?>
                    </div>
                    <?php }else{?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>No Uploaded</strong> Files....!
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
                    <!-- <p class = "" >Image not Found......!</p> -->
                    <?php }?>
        </div>
        </div>
        </div>
        
        </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>