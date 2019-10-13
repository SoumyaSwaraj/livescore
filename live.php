<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Score Board</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js" ></script>
    <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js" ></script>
    <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo.js" ></script>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
$(document).ready(
    function() {
setInterval(
function ()
{
$('#live').load('livescore.php');
}, 3000);
});

    </script>
  </head>
  <style type="text/css">
      @font-face { font-family: cfp; src: url('score/CFPunkisnotDead-Regular.ttf'); }
      @font-face { font-family: potterH; src: url('score/potter.ttf'); } 
    /*.large-header::webkit-scrollbar{
      display: none;
    }*/
    body{
      background-image: url('score/bgbg.jpg');
      margin-left: 1.1rem;
      margin-right: 1.2rem;
    }
    @media only screen and (min-width:940px){
       body{ overflow-y:hidden;
            overflow-x:hidden;
       }
    }
    .head{
      text-align: center;
      background: -webkit-linear-gradient( #e96443,#904e95 );
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-family: 'cfp';
      font-size: 5rem; 
    }
    .score{

      z-index: 100;
      text-align: center;
      margin-top: 5vh;
      font-family: 'potterH';
      padding-top: 110px;
      padding-bottom: 80px;
      background-size: 380px;
      border-radius: 14px;
      border-style: solid;
      margin-left: auto;
      margin-right: auto;
      position: relative;
      border-style: solid;
      border-style: groove;
      border-color: orange;
      border-width: 5px;
       }
    span{
      color: white;
      font-size: 2.6rem;
    }
    .score1{
      background-image: url('score/jedi.png');
      background-position: center;
      background-color: white;
      background-repeat: no-repeat;
    }
    .score2{
      background-position: center;
      background-color: white;
      background-repeat: no-repeat;
      background-image: url('score/hogwarts.png');
    }
    .score3{
      background-position: center;
      background-color: white;
      background-repeat: no-repeat;
      background-image: url('score/umbrella.png');
    }
    .score4{
      background-position: center;
      background-color: white;
      background-repeat: no-repeat;
      background-image: url('score/xman.png');
    }
    
  </style>

  <body>

      <div id="large-header" style=" position: absolute;">
         <canvas id="demo-canvas"></canvas>
</div>
<!--<div class="LOGO" ><img src="logo.png" /></div>-->
<h1 class="head"> Score Board </h1>

<br><br><br><br><br>

    <div class="row" id="live">
      
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>