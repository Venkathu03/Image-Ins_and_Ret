<?php
require_once 'connect.php';

$status = $statusMsg = '';
if(isset($_POST["submit"])){
    $status = 'error';
    if(!empty($_FILES["image"]["name"])){

        $filename = basename($_FILES["image"]["name"]);
        $filetype = pathinfo($filename, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if(in_array($filetype, $allowTypes)){
            $images = $_FILES['image']['tmp_name'];
            $imagecontent = addslashes(file_get_contents($images));

            $sql = "INSERT INTO images(File_name, Created) VALUES ('".$imagecontent."', NOW())";
            $insert = $con->query($sql);

            if($insert){
                $status = "Success";
                $statusMsg = 'File Uploaded Success';
            }
            else{
                $statusMsg = "Upload Failed Try Again...!";
            }
        }
        else{
                $statusMsg = "Sorry...! Only jpg, png, jpeg, gif Files are Allowed to Upload!";
    }
}
    else{
        $statusMsg = "Please Select an image to Upload";
    }
}

?>