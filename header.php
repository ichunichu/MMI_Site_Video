
<?php
$BASEURL = "http://localhost"
?>

<header>
    <a href=<?php echo "'$BASEURL/'"?>><h1>Collège Jean Monnet</h1></a>
    <nav>
        <ul>
            <li><a href=<?php echo "'$BASEURL/'"?>>Accueil</a></li>
            <li><a href=<?php echo "'$BASEURL/video.php'"?>>Videos</a></li>
            <li><a href=<?php echo "'$BASEURL/apropos.php'"?>>A propos</a></li>
            <li><a href=<?php echo "'$BASEURL/contact.php'"?>>Contacts</a></li>
        </ul>
    </nav>
    <button onclick="showMobileMenu()" >
        <svg xmlns="http://www.w3.org/2000/svg" fill="white"  viewBox="0 0 30 30" width="60px" height="60px"><path d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"/></svg>
    </button>
</header>