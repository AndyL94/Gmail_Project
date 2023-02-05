<?php
    session_start();
    include_once("./src/connect_bdd.inc.php");
?>
<?php 
    include_once "./src/head2.inc.php"
?>
<body>
    <header>
        <a href="./inscription.html"><img class="logo" src="./asset/gmail_logo.png" alt="logo"></a>
        <nav>
            <ul class="nav_links">
                <li><a href="#forpros">POUR LES PROS</a></li>
                <li><a href="./connexion.html">CONNEXION</a></li>
                <li><a href="./inscription.html">CRÉER UN COMPTE</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="connexion">

            <div>
                <h2>Bienvenue dans votre espace</h2>
            </div>

            <div class="formulaire" role="form" aria-labelledby="inscription">
                <fieldset>
                    <legend>
                        Connectez-vous à votre compte
                    </legend>
                    <form action="./src/log.inc.php" method="post">
    
                    <label for="email">Mail *</label><br>
                    <input type="email" id="email" name="mail" placeholder="E-mail" aria-required="true"><br>
    
                    <label for="email">Mot de passe *</label><br>
                    <input type="password" id="password" name="psw" placeholder="Password" aria-required="true"> <br>
                    
                    <div class="button">
                        <input type="submit" value="CONNEXION À VOTRE COMPTE">
                    </div>
                    
    
                    </form>
                </fieldset>
        </div>
        
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