<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="jmvideo.css">
  <script src="javascript/script.js" defer></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="JMvideo.css">
  <title>College JEAN-MONNET épisodes</title>
</head>

<body>
<?php 
    include "header.php";
?>

  <main>

    <h1>Jean n'est pas monnet saison 1</h1>
    <div class="videos">
    <?php
    include "data.php";
    foreach ($VIDEOS as $key => $value) {
      $title= $value->getTitle();
      $url= $value->getUrl();
      $numero= $value->getNumero();
      $shortDesc = $value->getShortDesc();
      echo <<< EOT
      <a href="/videoplayer.php?episode=$numero">
      <div class="desc"> <iframe id="vid1" width="200" height="200" border-radius="10%"
          src="$url"
          title="QUI EST L&#39;IMPOSTEUR ? (ft Pierre Niney &amp; François Civil)" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
          <div>
            <div class="row">
              <h3>$title</h3>
              <p>Épisodes $numero</p>
            </div>
            <p>$shortDesc</p>
          </div>
      </div>
    </a>
EOT;
    }
    
    ?>

    </div>
  </main>

  <?php
    include "footer.php"
    ?>






</body>




</html>