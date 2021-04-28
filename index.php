<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = "https://kit.fontawesome.com/a81368914c.js"> </script>
    <link href = "https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel = "stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulário em PHP</title>
</head>
<body>
    <img class="wave" src="image/wave 2.jpg">
    <div class="container">
        <div class="img">
            <img src="image/bg.svg">
        </div>
        <div class="login-container">
            <?php
                if (isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
            <form action="login.php" method="POST">
                <img src="image/avatar.svg">
                <h2 class="title">Bem-vindo</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="nome" placeholder="Usuario">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="email" placeholder="E-mail">
                    </div>
                </div>
                <a href="#">Esqueceu sua senha?</a>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
</body>
</html>