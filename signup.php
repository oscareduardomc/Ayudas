<?php

include 'conexion.php';


session_start();

if (isset($_POST['submit'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cPassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM tbl_user WHERE email='$email'";
        $result = mysqli_query($conex, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO tbl_user (fName, lName, phoneNumber, email, password)
					VALUES ('$fName', '$lName', '$phoneNumber', '$email', '$password')";
            $result = mysqli_query($conex, $sql);
            if ($result) {
                echo "<script>alert('Wow! Usuario registrado con exíto.')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Oops! Algo salió mal.')</script>";
            }
        } else {
            echo "<script>alert('Este cuenta ya existe..')</script>";
        }
    } else {
        echo "<script>alert('Las contraseñas no coiciden.')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <section>
        <div class="container">
            <form action="" method="POST">
                <div class="card">
                    <h3>Registrarse</h3>

                    <div class="input-group">
                        <input required="" type="text" name="fName" autocomplete="off" class="input">
                        <label class="user-label">Nombre</label>
                    </div>

                    <div class="input-group">
                        <input required="" type="text" name="lName" autocomplete="off" class="input">
                        <label class="user-label">Apellido</label>
                    </div>

                    <div class="input-group">
                        <input required="" type="number" name="phoneNumber" autocomplete="off" class="input">
                        <label class="user-label">Teléfono</label>
                    </div>

                    <div class="input-group">
                        <input required="" type="email" name="email" autocomplete="off" class="input">
                        <label class="user-label">Correo electrónico</label>
                    </div>

                    <div class="input-group">
                        <input required="" type="password" name="password" autocomplete="off" class="input">
                        <label class="user-label">Contraseña</label>
                    </div>

                    <div class="input-group">
                        <input required="" type="password" name="cPassword" autocomplete="off" class="input">
                        <label class="user-label">Confirmar contraseña</label>
                    </div>

                    <button name="submit">Registrarse</button>

                    <p class="reg">Ya tienes una cuenta? <a href="login.php">Ingresar</a></p>


                </div>
            </form>
        </div>
    </section>
</body>

</html>