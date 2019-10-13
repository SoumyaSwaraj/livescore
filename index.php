<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Score Board</title>
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
<?php
include_once('connection.php');
?>
  <body >

      <div id="large-header" style=" position: absolute;">
         <canvas id="demo-canvas"></canvas>
</div>
<!--<div class="LOGO" ><img src="logo.png" /></div>-->
<h1 class="head"> Score Board </h1>

    <div class="row" >
      <div class="col-lg-2 col-md-6 col-sm-12 score score1"><span class="counter" data-count="200">
          <?php
          $name="jedi";
            $query="SELECT * FROM points WHERE name LIKE '" . $name ."'";
            $resultx = mysqli_query($GLOBALS['connection'], $query);
            if(!$resultx){
                die('Query Failed' . mysqli_error($GLOBALS['connection']));
            }   
            while($row=mysqli_fetch_assoc($resultx)){
                
                $points = $row['points'];
                echo $points;
            }
          
          ?>
          
      </span></div>
      <div class="col-lg-2 col-md-6 col-sm-12 score score2"><span class="counter" data-count="200">
          <?php
          $name2="hogwarts";
            $query2="SELECT * FROM points WHERE name LIKE '" . $name2 ."'";
            $result2 = mysqli_query($GLOBALS['connection'], $query2);
            if(!$result2){
                die('Query Failed' . mysqli_error($GLOBALS['connection']));
            }   
            while($row=mysqli_fetch_assoc($result2)){
                
                $points = $row['points'];
                echo $points;
            }
          
          ?>
      </span></div>
      <div class="col-lg-2 col-md-6 col-sm-12 score score3"><span class="counter" data-count="200">
          <?php
          $name3="umbrella";
            $query3="SELECT * FROM points WHERE name LIKE '" . $name3 ."'";
            $resultx3 = mysqli_query($GLOBALS['connection'], $query3);
            if(!$resultx3){
                die('Query Failed' . mysqli_error($GLOBALS['connection']));
            }   
            while($row=mysqli_fetch_assoc($resultx3)){
                
                $points = $row['points'];
                echo $points;
            }
          
          ?>
      </span></div>
      <div class="col-lg-2 col-md-6 col-sm-12 score score4"><span class="counter" data-count="200">
          <?php
          $name4="xmansion";
            $query4="SELECT * FROM points WHERE name LIKE '" . $name4 ."'";
            $resultx4 = mysqli_query($GLOBALS['connection'], $query4);
            if(!$resultx4){
                die('Query Failed' . mysqli_error($GLOBALS['connection']));
            }   
            while($row=mysqli_fetch_assoc($resultx4)){
                
                $points = $row['points'];
                echo $points;
            }
          
          ?>
      </span></div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js" ></script>
    <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js" ></script>
    <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo.js" ></script>
  </body>
</html>