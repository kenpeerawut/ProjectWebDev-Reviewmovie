<!DOCTYPE html>
<html lang="en">    
<?php include "../Connectphp/connect.php"  ?>   
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MainPage</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
    $main = $pdo->prepare("SELECT * FROM movie");
    $main->execute();
?>
<body>

    
    <div class="topic">
        <div class="move">
            <img src="../img/LogoWeb.png" alt="" height="215px" width="100%">
        </div>       

        <div class="TYPE">
            <a href="../MovieTypes/Action.php" style="color: black;">Action</a>
            <a href="../MovieTypes/Horror.php" style="color: black;">Horror</a>
            <a href="../MovieTypes/Comedy.php" style="color: black;">Comedy</a>
            <a href="../MovieTypes/SciFi.php" style="color: black;">Sci-Fi</a>
            <a href="../MovieTypes/Fantasy.php" style="color: black;">Fantasy</a>
            <a href="../MovieTypes/Romatic.php" style="color: black;">Romantic</a><br><br>
            <a href="../SearchPage/Search.php">คลิกเพื่อค้นหาหนังที่ต้องการได้เลย!!</a>
        </div>
       
       
        <ul class="logo">
                <li>
                    <a href="../register/register.html"><img src="../img/register.png" alt="" width="150" height="50"></a>
                </li>
                <li>
                    <a href="../login/login.php"><img src="../img/login.png" alt="" width="100" height="40"></a>
                </li>
        </ul>
    </div>


    <?php
        

    ?>
  
    <div class="img">
        <img src="../img/poster.jfif" alt="" height="350px">
    </div>
    <div class="information">
        ชื่อหนัง?<br>
        วันที่เข้าฉาย?<br>
        Rateing?
    </div>
    <div class="img">
        <img src="../img/poster.jfif" alt="" height="350px">
    </div>
    <div class="information">
        ชื่อหนัง?<br>
        วันที่เข้าฉาย?<br>
        Rateing?
    </div>
    <div class="img">
        <img src="../img/poster.jfif" alt="" height="350px">
    </div>
    <div class="information">
        ชื่อหนัง?<br>
        วันที่เข้าฉาย?<br>
        Rateing?
    </div>
    <div class="img">
        <img src="../img/poster.jfif" alt="" height="350px">
    </div>
    <div class="information">
        ชื่อหนัง?<br>
        วันที่เข้าฉาย?<br>
        Rateing?
    </div>
    <div class="img">
        <img src="../img/poster.jfif" alt="" height="350px">
    </div>
    <div class="information">
        ชื่อหนัง?<br>
        วันที่เข้าฉาย?<br>
        Rateing?
    </div>
    <div class="img">
        <img src="../img/poster.jfif" alt="" height="350px">
    </div>
    <div class="information">
        ชื่อหนัง?<br>
        วันที่เข้าฉาย?<br>
        Rateing?
    </div>
</body>
</html>