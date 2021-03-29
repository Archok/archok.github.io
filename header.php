<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <style>
      html, body{
        font-family: 'Roboto',sans-serif;
        margin-bottom: 75px;margin:0;
      }

      .inner{
          width: 80%;
          margin: auto;
      }

      .menu{
          background: #E0E0E0;
          width: 100%;
          height: 75px;
          line-height: 75px;
          position: fixed;
          top: 0;
          
      }

      .logo{
          margin: 0;
          padding: 0;
          color: #088D10;
          text-transform: uppercase;
          font-size: 50px;
          font-weight: bold;
          font-family: 'Paytone One', sans-serif;
      }

      .inner img{
          height: 50px;
          width: 50px;
          margin: 10px 25px 10px 0px;
      }
      .m-left{
          float: left;
          display: flex;
          flex-direction: row;
      }

      .m-right{
          float: right;
          font-size: 20px;
      }

      .m-link{
          text-decoration: none;
          color: #088D10;
          text-transform: uppercase;
          font-weight: 700;
          padding: 0;margin: 0 10px;
          transition: all 0.3s ease-in-out;
          border-bottom: 2px solid transparent;
          
      }

      .m-link:hover{
          padding-bottom: 3px;
          border-color: #088D10;
      }
      .m-link i{
          margin-right: 5px;
      }

      .container{
          margin-top: 50px;
          width: 80%;
          margin-right: auto;
          margin-left: auto;
          font-size: 20px;
      }

      #foret{
          height: auto;
          width: 100%;
          margin-top: 75px;
      }

      div.container:target{
          padding-top: 75px;
          margin-top: -75px;
      }


      /* barre de progression */

      #progress{
        background-color: #088D10;
        height: 3px;
        width: 0;
        position: fixed;
        top: 74px;
        left: 0;
      }

      #cop{
          color: #088D10;
          text-transform: uppercase;
          font-weight: 900;
          text-align: center;
          margin:50px 0 50px 0;
          font-size: 80px;
          text-shadow: 1px 1px 2px rgb(180, 180, 180);
      }
    </style>
  </head>
  <script>
    window.onload = () => {
    window.addEventListener("scroll", () => {
        let hauteur = document.documentElement.scrollHeight - window.innerHeight
        let position = window.scrollY
        let largeur = document.documentElement.clientWidth
        let barre = position / hauteur * largeur
        document.getElementById("progress").style.width = barre+"px"
      })
    }
  </script>
  <header>
    <nav class="menu">
      <div class="inner">
        <div class="m-left">
          <img src="img/tree-1578.svg">
          <h1 class="logo">CFM</h1>
        </div>
        <div class="m-right">
          <a href="accueil.php" class="m-link"><i class="fas fa-home"></i> Accueil</a>
          <a href="#lehr" class="m-link"><i class="fas fa-question-circle"></i> Présentation</a>
          <a href="actu.php" class="m-link"><i class="fas fa-info-circle"></i></i> Actualités</a>
          <a href="#Document" class="m-link"><i class="fas fa-file"></i> Document</a>
          <a href="#Contact" class="m-link"><i class="fas fa-envelope"></i> Contact</a>
        </div>
      </div>
    </nav>
    <div id="progress"></div>
  </header>
</html>
