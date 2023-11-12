<?php header("content-type: text/css"); ?>

<!DOCTYPE html>
<html>
    <body>
        <style>
             body{
                background-color: rgb(255, 255, 255);
                color: white;
                font-family: Arial, Helvetica, sans-serif;
            }

            div {
                margin-bottom: 20px;
                text-align: center;
            }
            *{
                box-sizing: border-box;
                padding:0;
    
            }

            #menu-h ul{
                list-style: none;
                padding: 20px;
                background-color: rgb(37, 37, 39);
            }

            #menu-h ul li{
                display: inline;
            }

            #menu-h ul li a{
                color: rgb(255, 255, 255);
                padding: 20px;
                text-decoration: none;
                display: inline-block;
                display: inline;
                transition: background .4s;
            }

            #menu-h ul li a:hover {
                background-color:rgb(7, 123, 233);
                padding: 20px;
                display: inline-block;
                text-decoration: none;
            }

            img {
                width: 400px;
                height: 400px;
                object-fit: cover;
            }

            #imgpos {
                position:absolute;
                left:45%;
                top:25%;
                margin-left:-110px;
                margin-top:-40px;
            }
            #circulo {
                background: lightblue;
                border-radius: 50%;
                width: 100px;
                height: 100px;
            }

            .footer {
                background-color: rgb(37, 37, 39);
                padding: 20px;
                color: white;
                text-align: center;
            }
  
            .footer-button {
  
            }
</style>
    </body>
</html>

		

      
      
      