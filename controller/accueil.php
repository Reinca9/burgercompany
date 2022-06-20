<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger Compagny</title>
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/
    css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,400;1,800&display=swap"
        rel="stylesheet">
</head>

<nav>
    <div id="login">
    </div>
</nav>
<nav>
    <div id="login">
    </div>

    <body>

        <header>

            <a href="#" class="logo">Burger Compagny</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul class="navbar">
                <li><a href="">Accueil</a></li>
                <li><a href="#apropos">A Propos</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#contact">Contact</a></li>
                <?php check_user_status($bdd); ?>

            </ul>
        </header>
        <?php admincheck($bdd); ?>
        <section class="accueil" id="accueil">
            <div class="accueil-text">
                <h1>Best Burgers</h1>
                <h2>Le gout avant tout !</h2>
                <a href="#" class="mdj">Menu Du Jour</a>
            </div>
            <div class="accueil-img">
                <img src="../public/assets/img/home.png">
            </div>
        </section>
        <section class="apropos" id="apropos">
            <div class="apropos-img">
                <img src="../public/assets/img/about.png">
            </div>
            <div class="apropos-text">
                <span> A Propos De Nous</span>
                <h2>Le gout avant tout !</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque itaque expedita
                    officiis eveniet officia asperiores, nihil placeat nobis tempore</p>
                <a href="#" class="mdj">En Savoir Plus</a>
            </div>
        </section>
        <section class="menu" id="menu">
            <div class="titre">
                <span> Notre Menu</span>
                <h2>Un gout frais au prix imbattable</h2>
            </div>
            <div class="menu-container">
                <div class="box">
                    <div class="box-img">
                        <img src="../public/assets/img/food1.png" alt="">
                    </div>
                    <h2>Chicken Burger</h2>
                    <h3>un poulet juteux</h3>
                    <span>$10.00</span>
                    <i class='bx bx-cart-alt'></i>
                </div>
                <div class="box">
                    <div class="box-img">
                        <img src="../public/assets/img/food2.png" alt="">
                    </div>
                    <h2>Beef Burger</h2>
                    <h3>un steak cuit a la flamme</h3>
                    <span>$13.00</span>
                    <i class='bx bx-cart-alt'></i>
                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="../public/assets/img/food3.png" alt="">
                    </div>
                    <h2>Bucket</h2>
                    <h3>un poulet croustillant</h3>
                    <span>$15.00</span>
                    <i class='bx bx-cart-alt'></i>
                </div>
            </div>
        </section>

        <section class="service" id="service">
            <div class="titre">
                <span> Nos Services</span>
                <h2>Nous fourissons la meilleure qualité</h2>
            </div>
            <div class="service-container">
                <div class="s-box">
                    <img src="../public/assets/img/s1.png" alt="">
                    <h3>Commander</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Mollitia nihil ad voluptate asperiores incidunt. </p>
                </div>

                <div class="s-box">
                    <img src="../public/assets/img/s2.png" alt="">
                    <h3>à Emporter</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Mollitia nihil ad voluptate asperiores incidunt. </p>
                </div>
            </div>
        </section>
        <section class="parlons">
            <h2>Nous préparons des aliments de qualité<br> tous les jours</h2>
            <a href="#" class="mdj">Parlons</a>
        </section>
        <section id="contact">
            <div class="footer">
                <div class="main">
                    <div class="col">
                        <h4>Menus</h4>
                        <ul>
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#apropos">A Propos</a></li>
                            <li><a href="#menu">Menu</a></li>
                            <li><a href="#service">Service</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="#s'inscrire">S'inscrire</a></li>
                            <li><a href="#se connecter">Se Connecter</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4>Nos Services</h4>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Developement</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Management</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4>Informations</h4>
                        <ul>
                            <li><a href="#">A Propos De Nous</a></li>
                            <li><a href="#">Information Livraison</a></li>
                            <li><a href="#">Politique De Confidentialité</a></li>
                            <li><a href="#">Termes & Conditons</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4>Contactez-Nous</h4>
                        <div class="social">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>