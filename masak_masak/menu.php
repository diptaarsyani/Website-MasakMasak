
<?php require_once("statuslogin.php"); ?>


<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
</head>
<body>
    <h3><?php echo  $_SESSION["user"]?></h3>
    <p><a href="logout.php">Logout</a></p>
        <fieldset>
        <legend><h1>MENU</h1></legend>
        <h4>ini menunya belum jadi :(</h4>
        <form>
            <textarea placeholder="Tulis resep tapi belum bisa disave hehe.... "></textarea>
        </form>

        <?php for($i=0; $i < 6; $i++){ ?>
            <br>Ini contoh artikel berbagai resep tapi belum jadi hehehe <br> <br>
            <?php } ?>
        </fieldset>
            
</body>
</html>