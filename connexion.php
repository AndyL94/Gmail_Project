<?php
    session_start();
    include_once("./src/connect_bdd.inc.php");
?>
<?php 
    include_once "./src/head2.inc.php"
?>
<body>
    <header>
        <a href="./inscription.php"><img class="logo" src="./asset/gmail_logo.png" alt="logo"></a>
        <nav class="nav_btns">
            <ul class="nav_links">
                <li><a class="link" href="#forpros">POUR LES PROS</a></li>
                <li><a class="active-link" href="./connexion.php">CONNEXION</a></li>
                <li><a class="link" href="./inscription.php">CRÉER UN COMPTE</a></li>
            </ul>
            <div class="nav_btns">
                <!-- Theme change button -->
                <i class="fa-solid fa-moon change-theme" tabindex=0 aria-hidden="true" id="theme-button"></i>
            </div>
        </nav>
    </header>
    <main>
        <section id="connexion">

            <div>
                <h2>Bienvenue dans votre espace</h2>
            </div>

                <fieldset class="formulaire">
                    <legend>
                        Connectez-vous à votre compte
                    </legend>
                    <form action="./src/log.inc.php" method="post">
    
                    <label for="email">Mail ou login *</label><br>
                    <input type="email" id="email" name="mail" placeholder="E-mail" aria-required="true" required><br>
    
                    <label for="email">Mot de passe *</label><br>
                    <input type="password" id="password" name="psw" placeholder="Password" aria-required="true" required> <br>
                    
                    <div class="button">
                        <input type="submit" value="CONNEXION À VOTRE COMPTE">
                    </div>
                    
    
                    </form>
                </fieldset>
        
        </section>
    </main>
    <footer>

    </footer>
    <a href="#create_acc" class="scroll_down">
        <i class="fa-solid fa-chevron-down scrollup_icon" title="Icône Scroll-Down"></i>
    </a>
    <script src="./js/app.js"></script>
</body>
</html>