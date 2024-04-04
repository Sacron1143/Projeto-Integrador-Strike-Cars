<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php
    require_once "cabecalho.php";
?>
    <div class="text-center text-white pt-5" id="login">
        <h3 style="text-align: center; font-weight: bold" class="text-center text-white pt-5">Login form</h3>
        <div style="align: center" class="container mb-5" >
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="site.php" method="post" onsubmit="return validateForm()">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Usuario:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                                <small id="username-error" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                <small id="password-error" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Lembrar-me</span> <input id="remember-me" name="remember-me" type="checkbox"></label><br>
                                <button type="submit" class="btn btn-info btn-md" style="align: center">Entrar</button>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Cadastre-se</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var usernameError = document.getElementById("username-error");
            var passwordError = document.getElementById("password-error");
            
            usernameError.innerHTML = "";
            passwordError.innerHTML = "";

            if (username.trim() == "") {
                usernameError.innerHTML = "Por favor, insira um nome de usuário";
                return false;
            }

            if (!username.includes("@")) {
                usernameError.innerHTML = "O nome de usuário deve conter o caractere '@'";
                return false;
            }

            if (password.trim() == "") {
                passwordError.innerHTML = "Por favor, insira uma senha";
                return false;
            }

            if (password.length < 8) {
                passwordError.innerHTML = "A senha deve ter no mínimo 8 caracteres";
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
