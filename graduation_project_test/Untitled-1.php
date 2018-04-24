<html >
    <body>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

                      require 'Connection.php';
                      global $connect ;
                      $player_id = $_POST['player_id'];
                      $sql = "SELECT * FROM players where player_id = '$player_id'";
                      $result = mysqli_query($connect , $sql) ;
                      while ($row = mysqli_fetch_array($result)) {

                      $image = $row['player_image'];
                    
                        # code...
                     //   echo $image;
                          
                       // $path = "playerimags/$image" ;
                           
                      }
                        
                }
                ?>
<img src="playerimages/IMG_2438 copy.jpg">
<!--<img src="playerimages/<?php echo $image ; ?>">  -->  </body>
</html>