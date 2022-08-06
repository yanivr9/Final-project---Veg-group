<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"   integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="..\css\style.css">
  <link rel="stylesheet" href="..\css\find_a_dog.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <title>Find a dog</title>
</head>

<body>
  <header id="header">
    <!-- load header from header.html-->
    <?php include('header.html');?>
  </header>

  <main>
    <h2 class="headline">
      OUR DOGS
    </h2>
    <section class="d-flex justify-content-center coz-12 ">
      <ul class="col-lg-12 dog-list">
        <?php
          include('connect.php');
          $sql = "select * from Dogs";
          $result = $conn->query($sql);                   
          while ($row = $result->fetch_assoc()) {
              $dogID = $row['DogID'];
              $dogName = $row['DogName'];
              $location = $row['Location'];
              $gender = $row['Gender'];
              $img = $row['Img']; 
            
              echo '<li class="col-lg-4 dog-item float-left">             
              <a href="Adoption.php?ID='.$dogID.'">
                <img src="'.$img.'">
                <h3 class="d-block">
                  Name: '.$dogName.'
                </h3>              
                <h4>
                  Gender: '.$gender.'
                </h4>                
              </a>            
            </li>'
            ;             
          }    
          ?>           
      </ul>
    </section>
  </main>


  <footer id="footer">
    <!-- load header from header.html-->
    <?php include('footer.html');?>
  </footer>
  <script src="script.js"></script>
</body>
</html>