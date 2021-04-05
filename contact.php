<?php 
require_once('header.php');
$msgsuccess = "";
$msgerror = "";
if(isset($_POST['mailform'])) {
    if(!empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['message'])) {
        $header[]="MIME-Version: 1.0";
        $header[]='Content-Type:text/html; charset="uft-8"';
        $header[]="From:".$_POST['mail'];
        $message='
        <html>
            <body>
            <div align="center">
                <img src="http://www.primfx.com/mailing/banniere.png"/>     
                <br />
                <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
                <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
                <br />
                '.nl2br($_POST['message']).'
                <br />
                <img src="http://www.primfx.com/mailing/separation.png"/>
            </div>
            </body>
        </html>
        ';
        $email = mail("beauchard.nicolas@gmail.com", "ZEBI", $message, implode("\r\n",$header));
        $msgsuccess="Votre message a bien été envoyé !";
    } else {
        $msgerror="Tous les champs doivent être complétés !";
    }
}
?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/contact.css">
        <title>Contact</title> 
    </head>
    <body>
        <div id="container">

            <h2>Contactez la Coopérative Forestière Marnaise</h2>
            <form method="POST" action="">
                <div id="identifiant">
                    <input class="input" id="text-input" type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
                    <input class="input" id="text-input" type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
                </div>
                <textarea class="input" id="textarea" name="message" placeholder="Votre message..."><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
                <input id="button" type="submit" value="Envoyer !" name="mailform"/>
            </form>
            <div id="message">
                
                <?php if(isset($msgsuccess)) {
                    echo "<p style='color:green;'>".$msgsuccess."</p>";
                }if(isset($msgerror)){
                    echo "<p style='color:red;'>".$msgerror."</p>";
                }
                ?>
            </div>  
        </div>
        <?php require_once('footer.php'); ?>
    </body>
</html>
