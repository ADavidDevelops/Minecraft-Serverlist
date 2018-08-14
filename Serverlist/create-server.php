<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="create-server.css">
</head>

<body>
    <?php include("navbar.php"); ?>
    <div id="banner" align="center">
        <img src="imgs/ServerBanner.jpg" id="banner">
        <h3 class="banner-text" contenteditable="true">SERVER NAME</h3>
        <br>
        <h6 class="banner-text" contenteditable="true">Short Description</h6>
    </div>
    <div id="info">
        <div class="container" id="about">
            <h5 contenteditable="true">About SERVER NAME</h5>
            <p contenteditable="true">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div id="facts">
            <table>
                <tr>
                    <td><img src="imgs/Auther.jpg"></td>
                    <td>Posted By >
                        <?php echo "NAME" ?>
                    </td>
                </tr>
                <tr>
                    <td><img src="imgs/Date.jpg"></td>
                    <td>Released >
                        <?php echo date("Y/d/m (l)"); ?>
                    </td>
                </tr>
                <tr>
                    <td><img src="imgs/Info.jpg"></td>
                    <td>Category >
                        <select class="form-control">
                    <option value="Mini-Game">Mini-Game</option>
                    <option value="Factions">Factions</option>
                    <option value="Survival">Survival</option>
                    <option value="SMP">SMP</option>
                    <option value="Prison">Prison</option>
                    <option value="Kingdom">Kingdom</option>
                    <option value="KitPVP">KitPVP</option>
                    <option value="Towny">Towny</option>
                    <option value="RPG">RPG / MMO</option>
                    <option value="Creative">Creative</option>
                    <option value="Network">Network</option>
                    <option value="Modpack">Modpack (Beta)</option>
                    <option value="Other">Other</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td><img src="imgs/favs.jpg"></td>
                    <td>Shares > 0</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="container">
        <form method="post" id="register" action="loadImage.php" enctype="multipart/form-data">
            <button class="btn btn-info btn-lg" name="submit" id="submit">Submit</button>
            <input type="file" name="fileToUpload" id="fileToUpload">
        </form>

    </div>
</body>

</html>
