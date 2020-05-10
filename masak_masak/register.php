<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // menyiapkan query
    $sql = "INSERT INTO user (nama, email, password) 
            VALUES (:nama, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":nama" => $nama,
        ":email" => $email,
        ":password" => $password

    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
        <p>&larr; <a href="index.php">Home</a>
        <fieldset>
        <legend><h1>REGISTER</h1></legend>
        <h4>Buatlah akun untuk berbagi resep...</h4>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

        <form action="" method="POST">

                <label for="nama">Nama</label>
                <input type="text" name="nama" placeholder="Nama" />


                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" />


                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" />


            <input type="submit" name="register" value="Daftar" />

        </form>
    </fieldset>

</body>
</html>