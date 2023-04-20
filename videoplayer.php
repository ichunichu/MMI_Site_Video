<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidéo Player</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/script.js" defer></script>
</head>
<body>
    <?php
    include "data.php";

    $EPISODE = $VIDEOS[$_GET["episode"]-1];
    ?>
    <?php 
    include "header.php";
?>

    <main id="center_page"> 
        <div id="playerbouton">
            <div id="titrenum">
                <h1>
                <?php 
                    echo $EPISODE->getTitle();

                 ?>
                </h1>
                 <p>Episode <?php 
                    echo $EPISODE->getNumero();

                 ?></p>
            </div>

                <div id="player">
                    <iframe width="1080" height="720" src=<?php 
                    echo $EPISODE->getUrl();

                 ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
           <div id="date">
                   <p>Date de sortie</p>
                   <p><?php 
                    echo $EPISODE->getDuree();

                 ?></p>
                   <p><?php 
                    echo $EPISODE->getDate();

                 ?></p>
           </div>
            <div id="bouton_flex">            
                    <a href=
                    <?php 
                    echo "'$BASEURL/videoplayer.php?episode=".($_GET["episode"]-1)."' ";

                 ?>
                 class=<?php 
                    if ($_GET["episode"] == 1 ){
                        echo "'hidden'";
                    }

                 ?>
                 
                 ><button class="bouton" id="precedent">Episode Précédent</button></a>            
                    <a href=<?php 
                 echo "'$BASEURL/videoplayer.php?episode=".($_GET["episode"]+1)."'";

              ?>
              class=<?php 
                    if (count($VIDEOS) <= $_GET["episode"] ){
                        echo "'hidden'";
                    }

                 ?> ><button class="bouton" id="suivant"><span id="txtsuivant">Episode Suivant</span></button></a>            
            </div>
        </div>
        

        <div id="infos">

                   <h3>synopsis</h3>
                   <p id="synopsis">
                   <?php 
                    echo $EPISODE->getLongDesc();

                 ?>
                   </p>

        </div>

    </main>
    <?php
    include "footer.php"
    ?>
     
    

</body>
</html>