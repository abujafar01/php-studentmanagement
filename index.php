
<?php


    error_reporting(0);
    session_start();
    session_destroy();



    $host='localhost';
    $user="root";
    $password="";
    $db="schoolproject";

    $data=mysqli_connect($host, $user,$password,$db);

    $sql="SELECT * FROM teacher";


    $result=mysqli_query($data,$sql);




?>




<!DOCTYPE html>


<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Management</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
          <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- custom link -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
       
            <nav>
                <label for="" class="logo">W-School</label>
                    <ul>
                        <li><a href="">Home</a></li> 
                        <li><a href="">Contact</a></li>
                        <li><a href="">Addmission</a></li>
                        <li><a href="login.php" class="btn btn-success">Login</a></li>
                    </ul>
            </nav>


              <div class="section1">
                  <label for="" class="img-text">We Lead Students With Care</label>
                  <img class="main-img" src="image/banner-image99-8.jpg" alt="something">
              </div>


              <div class="container">


                  <div class="row">


                      <div class="col-md-4">
                          <img class="welcome-img" src="image/service-image-22.jpg" alt="something">

                      </div>

                     


                      <div class="col-md-8">
                            <h1>Welcome To W-School</h1>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                      </div>
                   </div>
                </div>


                <center>
                    <h1>Our Teachers</h1>
                </center>


                <div class="container">

                        <div class="row">


                            <div class="col-md-4">
                              <img class="teacher" src="image/gallery-image-125.jpg" alt="">
                              <p>middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable</p>
                            </div>

                            <div class="col-md-4">
                                <img class="teacher" src="image/gallery-image-39.jpg" alt="">
                                <p>middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable</p>
                            </div>

                            <div class="col-md-4">
                                <img class="teacher" src="image/gallery-image33.jpg" alt="">
                                <p>middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable</p>
                            </div>
                        </div>
                </div>









                <center>
                    <h1>Our Course</h1>
                </center>


                <div class="container">

                        <div class="row">

                            <div class="col-md-4">
                              <img class="teacher" src="image/gallery-image14.jpg" alt="">
                              <h1>Web Design</h1>
                            </div>

                            <div class="col-md-4">
                                <img class="teacher" src="image/gallery-image-21.jpg" alt="">
                                <h1>Web Development</h1>
                            </div>

                            <div class="col-md-4">
                                <img class="teacher" src="image/gallery-image-119.jpg" alt="">
                                <h1>Marketing</h1>
                            </div>
                        </div>
                </div>


                <center>
                  <h1 class="adm">Addmission Form</h1>
                </center>


                <div align="center" class="addmission-form">


                  <form action="data_check.php" method="POST">
                    <div class="adm-int">
                      <label for="" class="label-text">Name</label>
                      <input class="input_deg" type="text" name="name">
                    </div>
                    <div class="adm-int">
                      <label for="" class="label-text">Email</label>
                      <input class="input_deg" type="text" name="email">
                    </div>
                    <div class="adm-int">
                      <label for="" class="label-text">Phone</label>
                      <input class="input_deg" type="text" name="phone">
                    </div>
                    <div class="adm-int">
                      <label for="" class="label-text">Message</label>
                     <textarea class="input-text" name="message" id=""></textarea>
                    </div>
                    <div class="adm-int">
                     
                      <input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
                    </div>
                  </form>
                </div>
                <footer>
                  <h3 class="footer-text">All@copyright 2024 reserved by ABUJAFAR</h3>
                
                </footer>
         

            <!-- Latest compiled and minified JavaScript -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            
    
  </body>
</html>