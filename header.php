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
          background: #FFFFFF;
          width: 100%;
          height: 100px;
          position: fixed;
          top: 0;
          
      }

      #logo{
          height: 100px;
          width: 100px;
      }

      .inner img{
          height: 30px;
          width: 30px;
          margin:0px 5px -5px 0px;
      }
      .m-left{
          float: left;
          display: flex;
          flex-direction: row;
      }

      .m-right{
          font-size: 22.5px;
          float:right;
      }

      .m-link{
          text-decoration: none;
          color: #4e9e4b;
          text-transform: uppercase;
          font-weight: 700;
          padding: 0;margin: 0 10px;
          transition: all 0.3s ease-in-out;
          border-bottom: 2px solid transparent;
          
          
      }
      .m-link:hover{
          padding-bottom: 3px;
          border-color: #4e9e4b;
      }
      .m-link i{
          margin-right: 5px;
          color: #575027;
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
          margin-top: 100px;
      }

      div.container:target{
          padding-top: 100px;
          margin-top: -100px;
      }


      #cop{
          color: #4e9e4b;
          text-transform: uppercase;
          font-weight: 900;
          text-align: center;
          margin:50px 0 50px 0;
          font-size: 80px;
          text-shadow: 1px 1px 2px rgb(180, 180, 180);
      }

      .m-right > ul:after{
        content: "";
        display: block;
        clear: both;
      }

      .m-right > ul > li{
        float: left;
        line-height: 60px;
        position: relative;
      }


      .m-right li {list-style-type: none;}

      .submenu{
        display: none;
        position: absolute;
        z-index: 1000;
      }

      .submenu a{
        display: inline-block;
        text-decoration: none;
        width: 270px;
      }

      .submenu li a{
        font-weight: 400;
        font-size: 15px;
        color: #4e9e4b;
        width: auto;
        padding: 5px 5px 0px 5px;
        font-weight: 500;
        text-transform: uppercase;

      }
      li:hover .submenu  {
        display: block;
        position: absolute;
        top: 100%;
        left: 10px;
        padding: 0px;
        z-index: 1000;
        background-color: #FFFFFF;
      }

      .submenu li{
        border-bottom: 2px solid #4e9e4b;
        padding-bottom: -15px;
      }

      .s-link{
        width: 150px;
      }
      .s-link:hover{
        transform: scale(1.01);
      }

      .m-right > ul li:hover .submenu{
        display: block;
      }

      nav{
        position: sticky;
      }
    </style>
  </head>
  <header>
    <nav class="menu">
      <div class="inner">
        <div class="m-left">
          <a href="accueil.php"> 
          <img id="logo" src="img/cfm.jpg">
          </a>
        </div>
        <div class="m-right">
          <ul>
            <li class="titre"> 
              <a href="accueil.php#lehr" class="m-link"><i class="fas fa-question-circle"></i> Qui sommmes-nous ?</a>
              <ul class="submenu">
                <li><a href="accueil.php#Présentation" class="s-link">Présentation</a></li>
              </ul>
            </li>
          
            <li class="titre">
              <a href="activité.php" class="m-link"> <img src="img/Oak Tree-595b40b75ba036ed117d7c11.svg"> Activités</a>
              <ul class="submenu">
                <li><a href="#" class="s-link" >Ventes de bois</a></li>
                <li><a href="#" class="s-link">Services</a></li>
                <li><a href="#" class="s-link">Approvisionement</a></li>
              </ul>
            </li>

            <li class="titre">
              <a href="actu.php" class="m-link"><i class="fas fa-info-circle"></i> Actualités</a>
            </li>

            <li class="titre">
              <a href="document.php" class="m-link"><i class="fas fa-file"></i> Document</a>
            </li>
            
            <li class="titre">
              <a href="#Contact" class="m-link"><i class="fas fa-envelope"></i> Contact</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
  </header>
</html>
