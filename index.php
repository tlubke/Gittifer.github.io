<?php
require_once '../Mobile_Detect.php';
$detect = new Mobile_Detect;

$check = $detect->isMobile();
  if($check == true){
    header('Location: index.html');
    exit;
  } else {
    header('Location: mobile/index.html');
    exit;
  }
?>
<!DOCTYPE html>
<html>
   <head>
      <title>tyler lubke composer-programmer</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="styles/style.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Dosis:600|Dosis|Source+Code+Pro|Source+Sans+Pro" rel="stylesheet">
      <style>
      @media only screen and (max-width: 600px) {
        h3{
          font-size:5.35vmin;
        }
        p,li{
          font-size:3.3vmin;
        }
        sub{
          font-size:3vmin;
          color:#aca5af;
        }
      }
      </style>
   </head>
   <body>

      <div class='wrap'>
        <div class="vl" style=" animation: shrinkIn 1s 1 backwards"></div>
        <div class="left" style="background-color: white;border-right: none; text-align:right;">
          <h1 style="animation: fadeIn 1s; padding-right:2.5vmin;">
            tyler
          </h1>
          <div id="titlescroll" style="animation: fadeIn 1s 1s 1 backwards; font-size: 4vmin; padding-right:2.5vmin;">
            composer
          </div>
          <div style="padding-left:2.5vw;">
            <h3 style="animation: fadeIn 1s 3s 1 backwards; color:#aca5af">
            upcoming events:
            <br>
            <br>
            <ul>
              <li>UI Orchestra, Oct. 24.
                <br>
                <sub>
                @Voxman concert hall : 7:00PM
                </sub>
              </li>
              <li>&nbsp;</li>
              <li> loUI(laptop orchestra), Dec 3.
                <br>
                <sub>
                @Voxman opera studio : not sure
                </sub>
              </li>
            </ul>
          </h3>
          </div>
        </div>
        <div class="right" style="background-color: white;">
          <h1 style="animation: fadeIn 1s; padding-left:2.5vmin;">
            lubke
          </h1>
          <div style="animation: fadeIn 1s 1.5s 1 backwards; font-size: 4vmin; padding-left:2.5vmin;">
            programmer
          </div>
          <div class="home" style="animation: fadeIn 4.5s 0s 1 backwards;">
            <div>
            <a href="look.html" class="selectoption">look<i class="fa fa-angle-right" style="animation: float 1s 0s ease-out infinite alternate;"></i></a>
            </div>
            <div>
            <a href="listen.html" class="selectoption">listen<i class="fa fa-angle-right" style="animation: float 800ms 200ms ease-out infinite alternate"></i></a>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
         tyler.lubke@gmail.com<br>
         <a href="https://www.twitter.com/realTylerLubke/" target="_blank">
         <i class="fa fa-twitter"></i>
         </a>
         |
         <a href="https://www.instagram.com/tyler.lubke" target="_blank">
         <i class="fa fa-instagram"></i>
         </a>
         |
         <a href="https://tylerlubke.bandcamp.com" target="_blank">
         <i class="fa fa-bandcamp"></i>
         </a>
      </footer>
   </body>

   <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
   <script>
   var intervalID = window.setInterval(myCallback, 4000);
   var cycle = 0;
   var title = ['composer',
   'double-bassist',
   ];


   function myCallback() {
     $("#titlescroll").html(function(){
       cycle = cycle + 1;
       return title[cycle%title.length];
     });
   };
   </script>

</html>
