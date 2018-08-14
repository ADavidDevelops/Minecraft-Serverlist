<?php
if (isset($_POST["submit"])) {
    
//    $title = $_POST['servername'];
//    $ip    = $_POST['IP'];
//    $desc  = $_POST['Desc'];
//    include("database.php");
//    $query = "INSERT INTO servers(name,description,address) ";
//    $query .= "VALUES ('$title','$desc','$ip')";
//    $result = mysqli_query($connection, $query);
//    echo $result;
//    if (!$result) {
//        die('FAILED');
//    }
    include("database.php");
    $query = "SELECT * FROM servers";
    $list  = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($list)) {
        $id = $row['ID'];
    }
    $target_dir  = "banners/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    
    echo $target_file;
?> 
     <br>
     <?php
    $uploadOk      = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check         = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if ($_FILES["fileToUpload"]["size"] > 5000000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $id . "." . $imageFileType)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
//    header("Location: server.php?id=$id");
}
?>