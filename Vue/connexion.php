<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/bd1f979c00.js" crossorigin="anonymous"></script>

</head>

<?php
include ('../models/connexionbdd.php');
include ('../controller/connexionController.php');

if (isset($_POST['email'], $_POST['mdp'])){
connexion($bdd, $_POST['email'], $_POST['mdp']);
}
?>
<div id="pageconnexion">
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="POST">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input name="email" type="text" class="login__input" placeholder="Votre email">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input name="mdp" type="password" class="login__input" placeholder="Votre mot de passe">
                    </div>
                    <button class=" button login__submit">
                        <span class="button__text">
                            <p>Se connecter</p>
                        </span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
                <div class="social-login">

                    <div class="social-icons">
                        <a href="#" class="social-login__icon fab fa-instagram"></a>
                        <a href="#" class="social-login__icon fab fa-facebook"></a>
                        <a href="#" class="social-login__icon fab fa-twitter"></a>
                    </div>
                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
    <div>
        <i class="fa-solid fa-arrow-left-long-to-line"></i>
    </div>
</div>

</main>



</main>

</html>