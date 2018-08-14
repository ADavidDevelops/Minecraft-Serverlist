<?php
function loadServers(){ 
    $query = "SELECT * FROM servers";
            include("database.php");
            $list = mysqli_query($connection,$query);
            $rank = 0;
            while($row = mysqli_fetch_assoc($list)){
                $rank = $rank + 1;
                $id = $row['ID'];
                $title = $row['Name'];
                $desc = $row['Description'];
                $ip = $row['Address'];
                $src = images();
            ?>
        <a href="server.php?id=<?php echo $id ?>"><img id="image" src="<?php echo $src?>" class="server"></a>
<?php
        }
}
function images() {
//header('Content-type: image/jpeg');
//
//$image = new Imagick('image.jpg');
//
//// If 0 is provided as a width or height parameter,
//// aspect ratio is maintained
//$image->thumbnailImage(100, 0);
//
//echo $image;

}
loadServers();
?>
