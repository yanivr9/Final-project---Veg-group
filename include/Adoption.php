  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="..\css\style.css">
    <link rel="stylesheet" href="..\css\style.css">
    <link rel="stylesheet" href="..\css\adoption.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
    <title>Adoption</title>
  </head>

  <body>
    <header id="header">
       <!-- load header from header.html-->
      <?php include('header.html');?>
    </header>

    <main>    
      <?php
        include('connect.php');
        if($_GET['ID']){    
          $sql = "select * from Dogs where DogID=".$_GET['ID'];
          $result = $conn->query($sql);                   
          while ($row = $result->fetch_assoc()) {
              $dogID = $row['DogID'];
              $dogName = $row['DogName'];
              $location = $row['Location'];
              $gender = $row['Gender'];
              $age = $row['Age'];
              $color = $row['Color'];
              $hair = $row['Hair'];
              $owend = $row['Owned'];
              $img = $row['Img'];
              $img1 = $row['Img1'];
              $img2 = $row['Img2'];
          } 
        }
      ?>
      <h2 class="headline">
        Hi, I am  <?php echo ' '.$dogName;?>
      </h2>
      <section class="d-flex m-auto col-10 row">
        <ul class="col-lg-5 col-sm-12 dog">
          <li class="d-block justify-content-center">       
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo $img;?>" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo $img1; ?>" alt="Second slide">
              </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo $img2 ;?>" alt="Second slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
              </a>
            </div
          </li>
          <li class="d-block justify-content-center">       
            <h4>
              Location: <?php echo $location;?>
            </h4>
          </li>
          <li class="d-block justify-content-center">       
            <h4>
              Gender: <?php echo ' '.$gender;?>
            </h4>
          </li>
          <li class="d-block justify-content-center">       
            <h4>
              Age: <?php echo ' '.$age;?> Years Old
            </h4>
          </li> 
          <li class="d-block justify-content-center">       
            <h4>
              My stats: 
            </h4>
          </li>     
          <li class="d-block justify-content-center">       
            <span>
              <img src="https://sponsoradog.rolda.org/wp-content/themes/alone_child/sponsor/img/adoption-icons/paint-palette.svg">
            </span>
            color: <?php echo ' '.$color;?>
          </li> 
          <li class="d-block justify-content-center">       
            <span>
              <img src="https://sponsoradog.rolda.org/wp-content/themes/alone_child/sponsor/img/adoption-icons/salon.svg">
            </span>
            Hair: <?php echo ' '.$hair;?> 
          </li> 
          <li class="d-block justify-content-center">       
            <span>
              <img src="https://sponsoradog.rolda.org/wp-content/themes/alone_child/sponsor/img/adoption-icons/skills.svg">
            </span>
            Owner experience: <?php echo ' '.$owend;?>
          </li> 
          <li class="d-block justify-content-center">       
            <span>
              <i class="fas fa-check"></i>
            </span>
          My health has been checked
          </li>
          <li class="d-block justify-content-center">       
            <span>
              <i class="fas fa-check"></i>
            </span>
            My worming is up-to-date
          </li>
          <li class="d-block justify-content-center">       
            <span >
              <i class="fas fa-check"></i>
            </span>
            My vaccinations are up-to-date
          </li>
          <li class="d-block justify-content-center">       
            <span>
              <i class="fas fa-check"></i>
            </span>
            I have been microchipped
          </li>
      </ul>
        <ul class="col-lg-7 col-sm-12 dog">
          <p>Please fill out the form in front of you and we will get back to you soon </p>
          <form action="Adoption.php?ID=<?php echo $_GET['ID'];?>" method="post">
            <fieldset>
              <label>First Name:
                <input id="firstName" type="text" class="form-control" name="FirstName" required  placeholder="Enter first name" pattern="[A-Za-z]{2-20}">
              </label>

              <label>Last Name:
                <input id="lastName" type="text"  class="form-control" name="LastName" placeholder="Enter last name" pattern="[A-Za-z]{2-20}">
              </label>

              <label>ID:
                <input id="id" type="text"  class="form-control" name="ID" placeholder="Enter ID" pattern="[0-9]{9}" maxlength="9">
              </label>

              <label>Age:
                <input id="age" type="text" class="form-control" name="Age" placeholder="Enter your age" pattern="[0-9]{2-3}" maxlength="3">
              </label>

              <label>Address:
                <input id="address" type="text"  class="form-control" name="Address" placeholder="Enter your current Address">
              </label>

              <label>Phone Number:
                <input id="phoneNumber" type="tel"  class="form-control" name="PhoneNumber" placeholder="Enter phone number" pattern="[0-9]{10}" maxlength="10">
              </label>

              <label >Email address:
                <input id="email" type="email" class="form-control" id="Email1" name="Email" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
              </label>

              <label for="try">Family Size:
                <select name="FamilySize" class="form-control" aria-describedby="Number of persons in the family:">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </label>

              <fieldset class="form-group col-lg-12">
                <div class="row">
                  <legend class="col-form-label">Gender:</legend>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" value="Male" name="Gender" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Male</label>
                  </div>

                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" value="Female" name="Gender" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">Female</label>
                  </div>
                </div>

                <div class="row">
                  <legend class="col-form-label">Have you owned a pet in the past?</legend>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline3" value="Yes" name="ownedPet" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline3">Yes</label>
                  </div>

                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline4" value="No" name="ownedPet" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline4">No</label>
                  </div>
                </div>

                <div class="row">
                  <legend class="col-form-label">Do you own a pet these days?</legend>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" value="Yes" id="customRadioInline5" name="theseDays" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline5">Yes</label>
                  </div>

                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" value="No" id="customRadioInline6" name="theseDays" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline6">No</label>
                  </div>
                </div>

                <div class="row">
                  <legend class="col-form-label">Do you have a backyard?</legend>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" value="Yes" id="customRadioInline7" name="backyard" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline7">Yes</label>
                  </div>

                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" value="No" id="customRadioInline8" name="backyard" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline8">No</label>
                  </div>
                </div>

                <div class="row">
                  <legend class="col-form-label">Can you afford taking care of a pet?</legend>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" value="Yes" id="customRadioInline9" name="afford" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline9">Yes</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input value="No" type="radio" id="customRadioInline10" name="afford" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline10">No</label>
                  </div>
                </div>

                <div class="row">
                  <legend class="col-form-label">Would you like to adopt a pet if this <br> pet has already been
                    adopted?
                  </legend>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" value="Yes" id="customRadioInline11" name="beenAdopted" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline11">Yes</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" value="No" id="customRadioInline12" name="beenAdopted" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline12">No</label>
                  </div>  
              </div>                   
                  
                  <div class="row">
                    <legend class="col-form-label" onclick = "check()">
                      I declare that all the details are true
                      <input type="checkbox" id="checkbox">
                    </legend>
                  </div>  
              </fieldset>
              <button disabled onclick="subBtn()" type="submit" id="btn" class="btn btn-primary">Submit</button>
              <pre></pre>
              <p id="message"></p>
              <script>
                function check(){
                    //check if all fields are not null
                    let fName =  document.getElementById("firstName").value;
                    let lName =  document.getElementById("lastName").value;
                    let id =  document.getElementById("id").value;
                    let pNumber =  document.getElementById("phoneNumber").value;
                    let email =  document.getElementById("email").value;
                    if(email !="" && fName!="" && lName!="" && pNumber!="" && id!="" )
                    {
                      //enable the submit button
                      document.getElementById("btn").disabled = false;
                      document.getElementById("message").innerHTML = "";
                    }
                    else{
                        document.getElementById("checkbox").checked = false;
                        document.getElementById("message").innerHTML = "Please note to fill all the fields";
                        check();
                    }
                }
                function subBtn(){
                  window.alert("Thank you");
                }
              </script>
            </fieldset>
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

  <?php
      //connect to the DB by using connect.php page
      include('connect.php');    
      //insert all the valuse from the form into variable
      $FirstName = $_POST['FirstName'];
      $LastName = $_POST['LastName'];
      $ID = $_POST['ID'];
      $Age = $_POST['Age'];
      $Address = $_POST['Address'];
      $PhoneNumber = $_POST['PhoneNumber'];
      $Email = $_POST['Email'];
      $FamilySize = $_POST['FamilySize'];
      $Gender = $_POST['Gender'];
      $ownedPet = $_POST['ownedPet'];
      $theseDays = $_POST['theseDays'];
      $backyard = $_POST['backyard'];
      $afford = $_POST['afford'];
      $beenAdopted = $_POST['beenAdopted'];      
      $dogid = $_GET['ID'];      
      //Send all the details to the DB
      $insert_sql = "INSERT INTO Forms (RequestID,FirstName,LastName,ID,Age,Address,PhoneNumber,Email,FamilySize,Gender,ownedPet,theseDays,backyard,afford,beenAdopted,DogID) VALUES (NULL,'".$FirstName. "','".$LastName. "', '".$ID. "','".$Age. "','".$Address. "', '".$PhoneNumber. "','" .$Email. "','" .$FamilySize. "', '" .$Gender. "','" .$ownedPet. "','".$theseDays. "', '" .$backyard. "','" .$afford. "','" .$beenAdopted. "','" .$dogid. "')";                
      $result = $conn->query($insert_sql);          
      //echo '<script> window.alert('.$result.'); </script>';
  ?> 
  
  