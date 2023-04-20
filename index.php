
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/script.js" defer></script>
</head>
<body>
<?php 
    include "header.php";
?>
    
    <main id="mainAccueil">
        <section id="accueil">
                <iframe src="https://www.youtube-nocookie.com/embed/ZT6IYZor9e8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <div>
                <h2 class="title">Jean n'est pas Monnet</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos similique voluptates tempore, eveniet doloremque blanditiis modi totam autem commodi est alias a labore perferendis! Molestiae, error commodi. Sunt, rem! Quod?</p>
                <a href=<?php echo "'$BASEURL/video.php'"?> class="btn">Voir la série</a>
            </div>
            
        </section>
    </main>
    <?php
    include "footer.php"
    ?>
</body>
</html>
