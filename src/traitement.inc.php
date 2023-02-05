<?php 

    if(isset($_POST['submit']))
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prénom'];
        $email = $_POST['mail'];
        $password = $_POST['psw'];

        // On se connecte à MySQL
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=gmail', 'andy', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
        
        // Verifie si l'utilisateur est déja inscrit
        $sql = "SELECT * FROM accounts WHERE login = '$email' ";
        $result = $bdd->prepare($sql);
        $result->execute();

        if($result->rowCount() > 0)
        {
            $data = $result->fetchAll();
            if(password_verify($password, $data[0]["password"]))
            {
                echo "<p class=\"success\">Vous êtes déja inscrit, 
                <a href=\"../connexion.php\" title=\"pub\">Connectez vous</a>
                </p>";
                $_SESSION['email'] = $email;    
            }
            else
            {
                echo "<br>Identifiants invalides !!!";
            }
        }
        else
        {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO accounts (nom, prénom, login, password) VALUES ('$nom', '$prenom', '$email', '$password')";
            $req = $bdd->prepare($sql);
            $req->execute();
            echo "<p class=\"success\">Inscription effectuée :
                 <a href=\"../connexion.php\" title=\"pub\">Connectez vous</a>
                 </p>";
        }
    }

?>