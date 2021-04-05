<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <style>
        footer{
            position: fixed;
            bottom: 0; 
            width: 100%;
            font-family:'Roboto',sans-serif;
        }
        #bdp{
            display: flex;
            flex-direction: row;
            justify-content: center;
            background-color: #4e9e4b;
            bottom: 0px;
            color: white;
            font-weight: 700;

        }

        #bdp h4{
            text-transform: uppercase;
            font-size: 20px;
            color: rgb(20, 100, 20);
            margin-bottom: 10px;
        }

        #loca{
            text-align: center;
            font-size: 15px;
        }

        #loca a{
            text-decoration: none;
            color: white;
        }
        #tel{
            text-align: center;
            font-size: 15px;
        }

        #tel p{margin: 0;}

        hr{ 
            border:         none;
            border-left:    2px solid rgb(206, 206, 206);
            height:         70px;
            width:          1px;     
            margin-inline:  50px;  

        }
    </style>
</head>
<footer>
    <div id="bdp">
        <div id="loca">
            <h4><i class="fas fa-map-marker-alt"></i>  Localisation</h4>
            <a href="https://www.google.fr/maps/place/Union+des+Sylviculteurs+de+la+Marne/@49.0407232,3.9596237,18.75z/data=!4m13!1m7!3m6!1s0x47e96b45969e580d:0xd1a96818de3427d7!2s3+Rue+Lochet,+51200+%C3%89pernay!3b1!8m2!3d49.0408278!4d3.960032!3m4!1s0x47e96b459a1cf025:0xd30d9e65b7db62db!8m2!3d49.041101!4d3.9601448">3 Rue Lochet, 51200 Épernay</a>
        </div>
        <hr>
        <div id="tel">
            <h4><i class="fas fa-phone-alt"></i>  Nous joindre </h4>
            <p>Tel. 03 26 55 53 81 | Fax. 00 00 00 00 00 </p>
        </div>
    </div>
</footer>