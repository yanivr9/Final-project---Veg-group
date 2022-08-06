<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="..\css\style.css">
  <link rel="stylesheet" href="..\css\branch.css">
  <link rel="stylesheet" href="..\css\style.css">
  <link rel="stylesheet" href="..\css\branch.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"    crossorigin="anonymous"></script>

  </script>
  <title>Branch</title>
</head>

<body>
  <header id="header">
    <!-- load header from header.html-->
    <?php include('header.html');?>
  </header>

  <main>
    <?php
      //connect to the DB by using connect.php page
      include('connect.php');
      if($_GET['ID']){    
        $sql = "select * from Branchs where BranchID=".$_GET['ID'];
        $result = $conn->query($sql);                   
        while ($row = $result->fetch_assoc()) {
            $branchName = $row['BranchName'];
            $location = $row['Location'];
            $phoneNumber = $row['PhoneNumber'];
            $manager = $row['Manager'];      
            $email =  $row['Email'];    
            $img =  $row['Img'];    
            $wokingHours = $row['WorkingHours'];
        } 
      }
    ?>
    <h2 class="headline">
      <?php echo $branchName."'S BRANCH";?> 
    </h2>
    <!-- create branch object in the page -->
    <section class="d-flex m-auto col-lg-11 row">
      <ul class="d-block col-lg-7 branch-item">
        <li class="d-block justify-content-center">
          <img src="<?php echo $img;?>"class="col-lg-6 img-fluid">
        </li>
        <li class="d-block mt-2 justify-content-center">
          <h4 class="col-lg-12">
            <span>
              <i class="col-lg-1 fas fa-map-marker-alt"></i>
            </span>
            <?php echo $location;?> 
        </li>
        <li class="d-block justify-content-center">
          <h4 class="col-lg-12">
            <span>
              <i class="col-lg-1 fas fa-phone"></i>
            </span>
            <a href="#>"></a><?php echo $phoneNumber;?></h4>
        </li>
        <li class="d-block justify-content-center">
          <h4 class="col-lg-12">
            <span>
              <i class="col-lg-1 far fa-clock"></i>
            </span>
            <?php echo $wokingHours;?> 
          </h4>
        </li>
        <li class="d-block justify-content-center">
          <h4 class="col-lg-12">
            <span>
              <i class="col-lg-1 far fa-address-book"></i>
            </span>
            Branch manager: <?php echo $manager;?> 
          </h4>
        </li>
        <li class="d-block justify-content-center">
          <h4 class="col-lg-12">
            <span>
              <i class="col-lg-1 fa fa-envelope"></i>
            </span>
            E-mail address: <?php echo $email;?> 
          </h4>
        </li>
      </ul>

      <ul class="d-block col-lg-5 branch-item">
        <form  title="Not valid form" class="col-12">
          <label class="col-8">Full name:
            <input type="text" disabled class="form-control" name="FirstName" placeholder="Enter full name" pattern="[A-Za-z]{2-35}">
          </label>

          <label class="col-8">Phone Number:
            <input type="tel" disabled class=" form-control" name="PhoneNumber" placeholder="Enter phone number" maxlength="10" pattern="[0-9]{10}" maxlength="10">
          </label>

          <label class="col-8">Email address:
            <input type="email"  disabled class=" form-control"  name="Email" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
          </label>

          <div class="form-group">
            <label class="col-12" >Message:
              <textarea disabled class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your message"></textarea>
            </label>
          </div>
          <label class="col-6">
            <button type="submit" title = "Not valid" disabled  class="isDisabled btn btn-primary">Submit</button>
          </label>
        </form>
      </ul>
    </section>
  </main>
      
  <footer id="footer">
    <!-- load footer from footer.html-->
    <?php include('footer.html');?>
  </footer>
  <script src="script.js"></script>
</body>
</html>