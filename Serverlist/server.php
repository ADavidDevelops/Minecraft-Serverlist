<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="server.css">
</head>

<body>
    <?php
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    if(strpos($url,'id') !== false){
        $id = $_GET['id'];
            $query = "SELECT * FROM servers";
            include("database.php");
            $list = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($list)){
                if($id == $row['ID']){
                $title = $row['Name'];
                $desc = $row['Description'];
                $shortdesc = $row['ShortDesc'];
                $author = $row['Author'];
                $ip = $row['Address'];
                $website = $row['Website'];
                $registered = $row['Registered'];
                $updated = $row['Updated'];
                $cat = $row['Cat'];
                $shares = $row['Shares'];
                break;
                }
        }
    } else {
        header("Location: index.php");
    }
        ?>
        <?php include("navbar.php"); ?>
        <div class="home" id="banner" align="center">
            <img src="imgs/ServerBanner.jpg" id="banner">
            <h3 class="banner-text"><?php echo $title ?></h3>
            <br>
            <h6 class="banner-text"><?php echo $shortdesc ?></h6>
        </div>
        <div id="info">
            <div class="container" id="about">
                <h5>About SERVER NAME</h5>
                <p><?php echo $desc ?>
                </p>
            </div>
            <div id="facts">
                <table>
                <tr>
                    <td><img src="imgs/Auther.jpg"></td>
                    <td>Posted By > <?php echo $author ?></td>
                </tr>
                <tr>
                    <td><img src="imgs/Date.jpg"></td>
                    <td>Released > <?php echo $registered ?></td>
                </tr>
                <tr>
                    <td><img src="imgs/Info.jpg"></td>
                    <td>Category > <?php echo $cat ?></td>
                </tr>
                <tr>
                    <td><img src="imgs/favs.jpg"></td>
                    <td>Shares > <?php echo $shares ?></td>
                </tr>
            </table>
            </div>
        </div>
</body>

</html>
