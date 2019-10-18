<!DOCTYPE html>
<html>
    <header>
        <link rel="stylesheet" href="style.css"/>
        <title>KS & GOLD</title>
    </header>
    <body>
        <div>
        <img src="logo.PNG" alt="logo">
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="aboutme.php">About Me</a></li>
                <li><a href="myprojects.php">My projects</a></li>
                <p class="myname"> samassi abdoul </p>
            </ul>
        </div>
            <h1 class="projet">#Project1</h1>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '1'");
             while($data = $requete->fetch()) {
                echo '<h1 class="titre">'.$data['title'].'</h1>';
            }
            $requete->closeCursor();
            ?>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '1'");
             while($data = $requete->fetch()) {
                echo '    <th scope=\"col\"><img class="img" src='.$data['picture'].'></th>';
            }
            $requete->closeCursor();
            ?>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '1'");
             while($data = $requete->fetch()) {
                echo '<p class="data">'.$data['description'].'</p>';
                echo '<p class="data">'.$data['date_created'].'</p>';
                echo '<p class="data">'.$data['date_update'].'</p>';
            }
            $requete->closeCursor();
            ?>
        </div>
        </div>
            <h1 class="projet2">#Project2</h1>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '2'");
             while($data = $requete->fetch()) {
                echo '<h1 class="title2">'.$data['title'].'</h1>';
            }
            $requete->closeCursor();
            ?>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '2'");
             while($data = $requete->fetch()) {
                echo '    <th scope=\"col\"><img class="img2" src='.$data['picture'].'></th>';
            }
            $requete->closeCursor();
            ?>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '2'");
             while($data = $requete->fetch()) {
                echo '<p class="data2">'.$data['description'].'</p>';
                echo '<p class="data21">'.$data['date_created'].'</p>';
                echo '<p class="data22">'.$data['date_update'].'</p>';
            }
            $requete->closeCursor();
            ?>
        </div>
        </div>
            <h1 class="projet3">#Project3</h1>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '3'");
             while($data = $requete->fetch()) {
                echo '<h1 class="title3">'.$data['title'].'</h1>';
            }
            $requete->closeCursor();
            ?>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '3'");
             while($data = $requete->fetch()) {
                echo '    <th scope=\"col\"><img class="img3" src='.$data['picture'].'></th>';
            }
            $requete->closeCursor();
            ?>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '3'");
             while($data = $requete->fetch()) {
                echo '<p class="data3">'.$data['description'].'</p>';
                echo '<p class="data33">'.$data['date_created'].'</p>';
                echo '<p class="data34">'.$data['date_update'].'</p>';
            }
            $requete->closeCursor();
            ?>
        </div>
        </div>
            <h1 class="projet4">#Project4</h1>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '4'");
             while($data = $requete->fetch()) {
                echo '<h1 class="title4">'.$data['title'].'</h1>';
            }
            $requete->closeCursor();
            ?>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '4'");
             while($data = $requete->fetch()) {
                echo '    <th scope=\"col\"><img class="img4" src='.$data['picture'].'></th>';
            }
            $requete->closeCursor();
            ?>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '4'");
             while($data = $requete->fetch()) {
                echo '<p class="data4">'.$data['description'].'</p>';
                echo '<p class="data44">'.$data['date_created'].'</p>';
                echo '<p class="data45">'.$data['date_update'].'</p>';
            }
            $requete->closeCursor();
            ?>
        </div>
        </div>
            <h1 class="projet5">#Project5</h1>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '5'");
             while($data = $requete->fetch()) {
                echo '<h1 class="title5">'.$data['title'].'</h1>';
            }
            $requete->closeCursor();
            ?>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '5'");
             while($data = $requete->fetch()) {
                echo '    <th scope=\"col\"><img class="img5" src='.$data['picture'].'></th>';
            }
            $requete->closeCursor();
            ?>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '5'");
             while($data = $requete->fetch()) {
                echo '<p class="data5">'.$data['description'].'</p>';
                echo '<p class="data55">'.$data['date_created'].'</p>';
                echo '<p class="data56">'.$data['date_update'].'</p>';
            }
            $requete->closeCursor();
            ?>
        </div>
        </div>
            <h1 class="projet6">#Project6</h1>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '6'");
             while($data = $requete->fetch()) {
                echo '<h1 class="title6">'.$data['title'].'</h1>';
            }
            $requete->closeCursor();
            ?>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '6'");
             while($data = $requete->fetch()) {
                echo '    <th scope=\"col\"><img class="img6" src='.$data['picture'].'></th>';
            }
            $requete->closeCursor();
            ?>
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ksgold', 'root', '');
                $requete = $bdd->query("SELECT * FROM projet WHERE id = '6'");
             while($data = $requete->fetch()) {
                echo '<p class="data6">'.$data['description'].'</p>';
                echo '<p class="data65">'.$data['date_created'].'</p>';
                echo '<p class="data66">'.$data['date_update'].'</p>';
            }
            $requete->closeCursor();
            ?>
        </div>
        <footer>
            <ul class="ullogo">
                <p class="cpr">© Copyright all right reserved</p>
                <li><a class="insta" href="https://www.instagram.com/willsmith/?hl=fr"> 📸 instagram</a></li>
                <li><a class="lin" href="https://www.linkedin.com/in/abdoul-samassi-a11734134/"> ✉ linkedin</a></li>
                <li><a class="twi" href="https://twitter.com/arianagrande?lang=fr">✈ twitter</a></li>
            </ul>
        </footer>
    </body>
</html>