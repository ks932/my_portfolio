<!DOCTYPE html>
<html>
    <header>
        <link rel="stylesheet" href="style.css"/>
        <title>KS & GOLD</title>
    </header>
    <body>
        <div class= "backmenu">
        <img src="logo.PNG" alt="logo">
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="aboutme.php">About Me</a></li>
                <li><a href="myprojects.php">My projects</a></li>
                <p class="myname"> samassi abdoul </p>
            </ul>
        </div>
        <div class="about">
            <h1 class="titreab">ABOUT ME</h1>
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
        $requete = $bdd->query("SELECT * FROM me WHERE id = '1'");
        while($data = $requete->fetch()) {
            echo '<p class="fphp">'.$data['firstname'].'</p>';
            echo '<p class="tphp">'.$data['lastname'].'</p>';
            echo '<p class="tphp">'.$data['email'].'</p>';
            echo '<p class="tphp">'.$data['phone'].'</p>';
            echo '<p class="tphp">'.$data['adresse'].'</p>';
            echo '<p class="tphp">'.$data['city'].'</p>';
            echo '<p class="tphp">'.$data['country'].'</p>';
            echo '<p class="tphp">'.$data['birth_date'].'</p>';
            echo '<p class="tphp">'.$data['description'].'</p>';
        }
        $requete->closeCursor();
        ?>
        <footer>
            <ul class="ullogo">
                <p class="cpr">© Copyright all right reserved</p>
                <li><a class="insta" href="https://www.instagram.com/willsmith/?hl=fr"> 📸 instagram</a></li>
                <li><a class="lin" href="https://www.linkedin.com/in/abdoul-samassi-a11734134/"> ✉ linkedin</a></li>
                <li><a class="twi" href="https://twitter.com/arianagrande?lang=fr">✈ twitter</a></li>
            </ul>
        </footer>
        </div>
    </body>
</html>