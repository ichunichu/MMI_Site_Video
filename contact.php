<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contactez-nous</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/script.js" defer></script>
  </head>
  <body>
  <?php 
    include "header.php";
?>

    <main id="contactMain">
      <section class="contact">
        <h1>Contactez-nous</h1>
        <form action="#" method="POST">
          <div class="information">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" placeholder="Entrez votre nom.." required />
          </div>

          
            <div class="information">
              <label for="email">E-mail:</label>
              <input type="email" id="email" name="email" placeholder="Entrez votre e-mail.." required />
            </div>


          <div class="information">
            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Ecrivez votre message.." required></textarea>
          </div>

          <div class="information">
            <input type="submit" value="Envoyer" class="btn"/>
          </div>
        </form>
      </section>

      <section id="autres-contact">

        <a href="tel:+563625180">
        <div class="info-sup">
          <img id="tel" src="img/telephoner.png" alt="tiliphone">
          <p>+33 5 63 62 51 80</p>

        </div>
      </a>

        <a href="mailto:0810061b@ac-toulouse.fr">
        <div class="info-sup">
          <img id="mail" src ="img/e-mail.png" alt="mail">
          <p>0810061b@ac-toulouse.fr</p>
          
        </div>
        </a>
        <a href="https://www.google.com/maps/place/Coll%C3%A8ge+Jean+Monnet/@43.60755,2.2559363,15z/data=!4m6!3m5!1s0x12ae11d0553fb591:0x19000c9414c1c9bf!8m2!3d43.60755!4d2.2559363!16s%2Fg%2F1vp5_1w1" target="_blank" >
        <div class="info-sup">
          <img id="map" src ="img\navigation.png" alt="map">
          <p>24 Av. du Sidobre, 81100 Castres</p>
        </div>
      </a>


        
      </section>

    </main>

    <?php
    include "footer.php"
    ?>
  </body>
</html>
