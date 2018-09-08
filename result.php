<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hunt Event!</title>
  </head>
  <body>
  <?php
  $ID = $_GET['result'];
   echo '<h1>Hunt Event: '.$ID.'</h1>';
   $con=mysqli_connect('localhost', 'root', '','hunt_event');
  // Check connection
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  $sql = 'SELECT * FROM hunt WHERE ID ='.$ID.'';
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
     while($row = mysqli_fetch_assoc($result)) {
       echo'<h2>'.$row['TITLE'].'</h2>';
        echo $row["DESCRIPTION"]. "<br>";
     }
  } else {
     echo "0 results";
  }
  mysqli_close($con);
?>
<p>A constant moan follows the survivors. Eventually, they enter an area shrouded in thick fog and the wailing reaches a fevered pitch.</p><p>Every <strong>non-deaf</strong> survivor rolls 1d10. If all survivors are <strong>deaf</strong>, they continue along, heedless to the cacophony: end this event. The lowest scoring survivors (or survivors, in case of ties) becomes a straggler. each straggler rolls 1d10. if any survivor has <strong>noisy</strong> gear, the straggler adds +2 to their roll.</p><p>If any survivor has <strong>noisy</strong> gear and the settlement has <strong>Drums</strong>, they counter the wails with a tune from home. Do not roll on the table and each survivor gains +2 insanity and +2 survival.</p><table class="table table-bordered"><thead><th>1d10</th><th>Straggler</th></thead><tbody><tr><td>1-3</td><td>The fog around you turns black and fills with shapes of tormented faces. You are driven to madness. Gain 1 random disorder.</td></tr><tr><td>4-6</td><td>The fog grows and begins to wail. You plug your ears with your fingers, but it's hopeless. Suffer monster level brain event damage.</td></tr><tr><td>7-9</td><td>You stick your thumbs into your ears and break into a run, leaving the wailing smoke.</td></tr><tr><td>10+</td><td>Mimicking the disturbing smoke, you calmy start to wail with it. Gain +2 insanity.</td></tr></tbody></table>
<a href="index.php" class="btn btn-info" role="button">BACK</a>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
