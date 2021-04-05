<?php 
    require_once('header.php');
?>
</html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/document.css">
        <title>Document</title> 
    </head>
    <body>
        <div id="container">
            <h2>Téléchargez vos Documents</h2>
            <div class="ligne">
                <p>Formulaire d'adhésion au format pdf.</p>
                <a href="ressources/adhesion_gfm.pdf" download="Formulaire d'adhésion"><i class="fas fa-file-pdf dl"></i></a>
            </div>
            <div class="ligne">
                <p>Exemple d'un autre fichier à télécharger.</p>
                <a href="#" download="Exemple"><i class="fas fa-file-download dl"></i></a>
            </div>
        </div>
        <?php require_once('footer.php'); ?>
    </body>
</html>