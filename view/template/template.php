<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/f00c55aea5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title><?= $pageTitle ?></title>
</head>

<body>
    <header>
        <nav class="top_navbar">
            <ul>
                <li>
                    <a href="index.php">Bibliothèque</a>
                </li>
                <div class="icons_navbar">
                    <li>
                        <span><i class="fa-brands fa-facebook"></i></span>
                    </li>
                    <li>
                        <span><i class="fa-brands fa-twitter"></i></span>
                    </li>
                </div>
                <!-- class="search-input" -->
                <div class="search_navbar">
                    <form action="index.php?controller=articles&task=search" method="POST">
                        <input type="text" name="searchValue" placeholder="Search...">
                        <button name="search" class="search-btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>

                <div class="user_navbar">
                    <?php
                    if (!isset($_SESSION)) {
                        session_start();
                    }
                    if (!isset($_SESSION['is_logged'])) : ?>
                        <li>
                            <div class="signup_navbar" id="signup">
                                S'inscrire
                            </div>
                        </li>
                    <?php else : ?>
                        <li>
                            <div class="signup_navbar">
                                <?php if (!isset($_SESSION)) {
                                    session_start();
                                }
                                if ($_SESSION['is_admin'] == "1") : ?>
                                    <a href="index.php?controller=user&task=showUsers">
                                        Admin
                                    </a>
                                <?php endif; ?>
                                <a href="index.php?controller=pret&task=availableIndex">
                                    Mon compte
                                </a>
                                <a href="index.php?controller=user&task=logout" onclick="return window.confirm('Êtes vous sûr de vouloir vous déconnecter ?')">
                                    Se déconnecter
                                </a>
                            </div>
                        </li>
                    <?php endif; ?>
                </div>
            </ul>
        </nav>
    </header>
    <main>

        <div id="form_signup">
            <div class="wrapper">
                <section class="form signup">
                    <!-- enctype="multipart/form-data" -->
                    <form action="index.php?controller=user&task=insert" method="POST">
                        <div class="error-txt"></div>
                        <div class="name-details">
                            <div class="field input">
                                <label>Prénom</label>
                                <input type="text" name="fname" placeholder="Prénom" required>
                            </div>
                            <div class="field input">
                                <label>Nom</label>
                                <input type="text" name="lname" placeholder="Nom" required>
                            </div>
                        </div>
                        <div class="field input">
                            <label>Adresse email</label>
                            <input type="text" name="email" placeholder="Entrer votre email" required>
                        </div>
                        <div class="field input">
                            <label>Mot de passe</label>
                            <input type="password" name="password" placeholder="Entrez votre mot de passe" required>
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field input">
                            <label>Adresse</label>
                            <input type="text" name="adress" placeholder="Votre adresse" required>
                        </div>
                        <div class="name-details">
                            <div class="field input">
                                <label>Ville</label>
                                <input type="text" name="city" placeholder="Ville" required>
                            </div>
                            <div class="field input">
                                <label>Code postal</label>
                                <input type="text" name="zip_code" placeholder="Code postal" required>
                            </div>
                        </div>
                        <!-- <div class="field image">
                                <label>Select Image</label>
                                <input type="file" name="image" required>
                            </div> -->
                        <div class="field button">
                            <input type="submit" value="S'inscrire">
                        </div>
                    </form>
                    <div id="login" class="link">Déjà inscrit ? <span class="authentification">Se connecter</span></div>
                </section>
            </div>
        </div>



        <div id="form_login">
            <div class="wrapper">
                <section class="form signup">
                    <!-- enctype="multipart/form-data" -->
                    <form action="index.php?controller=user&task=login" method="POST">
                        <div class="error-txt"></div>
                        <div class="field input">
                            <label>Adresse email</label>
                            <input type="text" name="email" placeholder="Entrer votre email" required>
                        </div>
                        <div class="field input">
                            <label>Mot de passe</label>
                            <input type="password" name="password" placeholder="Entrez votre mot de passe" required>
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field button">
                            <input type="submit" value="Se connecter">
                        </div>
                    </form>
                    <div id="register" class="link">Déjà inscrit ? <span class="authentification">S'inscrire</span></div>
                </section>
            </div>
        </div>
        <div class="content">
            <?= $pageContent ?>
        </div>

    </main>

    <script>
        document.getElementById("signup").addEventListener('click', event => {
            // toogle permet de voir si la classe est active alors il l'enlève sinon il le mets
            document.getElementById("form_signup").classList.toggle("active")
        })

        document.getElementById('login').addEventListener('click', event => {
            document.getElementById("form_signup").classList.remove("active")
            document.getElementById("form_login").classList.toggle("active")
        })
        document.getElementById('register').addEventListener('click', event => {
            document.getElementById("form_signup").classList.toggle("active")
            document.getElementById("form_login").classList.remove("active")
        })

        const pswrdField = document.querySelector(".form input[type='password']"),
            toggleBtn = document.querySelector(".form .field i ");

        toggleBtn.onclick = () => {
            if (pswrdField.type == "password") {
                pswrdField.type = "text";
                toggleBtn.classList.add("active");
            } else {
                pswrdField.type = "password";
                toggleBtn.classList.remove("active");
            }
        }
    </script>
</body>

</html>