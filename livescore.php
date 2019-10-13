<?php
          include_once('connection.php');
?>
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