<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <div class="container">
    <div class="form-box box">


      <header>Registrarse</header>
      <hr>

      <form action="#" method="POST">


        <div class="form-box">

          <?php

          session_start();

          include "conexion.php";

          if (isset($_POST['register'])) {

            $name = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $cpass = $_POST['cpass'];


            $check = "select * from users where email='{$email}'";

            $res = mysqli_query($conn, $check);





            if (mysqli_num_rows($res) > 0) {
              echo "<div class='message'>
            <p>Ese email ya esta en uso, Ingresa otro por favor!</p>
            </div><br>";

              echo "<a href='javascript:self.history.back()'><button class='btn'>Volver</button></a>";


            } else {

              if ($pass === $cpass) {

                $sql = "insert into users(username,email,password,rol) values('$name','$email','$pass','user')";

                $result = mysqli_query($conn, $sql);

                if ($result) {

                  echo "<div class='message'>
                        <p>Tu registro fue exitoso!</p>
                        </div><br>";

                        header("Location: login.php");
                        exit();

                } else {
                  echo "<div class='message'>
                <p>Ese email ya se encuentra en uso, Ingresa otro por favor!</p>
                </div><br>";

                  echo "<a href='javascript:self.history.back()'><button class='btn'>Volver</button></a>";
                }

              } else {
                echo "<div class='message'>
                <p>La contraseñas no coinciden.</p>
                </div><br>";

                echo "<a href='registro.php'><button class='btn'>Volver</button></a>";
              }
            }
          } else {

            ?>

            <div class="input-container">
              <i class="fa fa-user icon"></i>
              <input class="input-field" type="text" placeholder="Username" name="username" required>
            </div>

            <div class="input-container">
              <i class="fa fa-envelope icon"></i>
              <input class="input-field" type="email" placeholder="Email Address" name="email" required>
            </div>

            <div class="input-container">
              <i class="fa fa-lock icon"></i>
              <input class="input-field password" type="password" placeholder="Password" name="password" required>
              <i class="fa fa-eye icon toggle"></i>
            </div>

            <div class="input-container">
              <i class="fa fa-lock icon"></i>
              <input class="input-field" type="password" placeholder="Confirmar la contraseña" name="cpass" required>
              <i class="fa fa-eye icon"></i>
            </div>

          </div>


          <center><input type="submit" name="register" id="submit" value="Regístrate" class="btn"></center>


          <div class="links">
            Ya tienes una cuenta? <a href="login.php">Inicia Sesión</a>
          </div>

        </form>
      </div>
      <?php
          }
          ?>
  </div>

  <script>
    const toggle = document.querySelector(".toggle"),
      input = document.querySelector(".password");
    toggle.addEventListener("click", () => {
      if (input.type === "password") {
        input.type = "text";
        toggle.classList.replace("fa-eye-slash", "fa-eye");
      } else {
        input.type = "password";
      }
    })
  </script>
</body>

</html>