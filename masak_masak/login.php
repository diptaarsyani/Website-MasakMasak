<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM user WHERE email=:email AND password=:password";
    $stmt = $db->prepare($sql);
    
    $user = $stmt->fetch();

    // jika user terdaftar
    if(user_verify){
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: menu.php");
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

        <p>&larr; <a href="index.php">Home</a>
        <fieldset>
        <legend><h1>LOG IN</h1></legend>
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

        <form action="" method="POST">

                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Email" />

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" />

            <input type="submit" name="login" value="Login" />
        </form>
    </fieldset>
            
</body>
</html>