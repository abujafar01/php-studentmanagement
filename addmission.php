<?php
 session_start();

 if(!isset($_SESSION['username']))

 {
      header("location:login.php");
 }

 elseif($_SESSION['usertype']=='student'){

    header("location:login.php");

 }


$host="localhost";
$user="root";
$password="";
$db="schoolproject";


$data=mysqli_connect($host, $user, $password, $db);


$sql="SELECT * FROM addmission";


$result=mysqli_query($data, $sql);



?>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
 
      <?php
      
        include 'addmin_css.php';
      
      ?>
</head>
<body>


  <?php
  
    include 'addmin_sidebar.php';
  
  
  ?>
    <!-- <header class="head">
        <a href="">Admin Dashboard</a>


        <div class="logout">

          <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </header>
    <aside>

      <ul>
        <li><a href="addmission.php">Addmission</a></li>
        <li><a href="">Add Student</a></li>
        <li><a href="">View Student</a></li>
        <li><a href="">Add Teacher</a></li>
        <li><a href="">View Teacher</a></li>
        <li><a href="">Add Courses</a></li>
        <li><a href="">View Courses</a></li>
      </ul>
    </aside> -->

    <div class="content">
      <center>
        <h1> Applied For Addmission</h1>


        <br><br>

        <table border="1px">
            <tr>
                <th style="padding: 20px; font-size: 15px">Name</th>
                <th style="padding: 20px; font-size: 15px">Email</th>
                <th style="padding: 20px; font-size: 15px">Phone</th>
                <th style="padding: 20px; font-size: 15px">Message</th>
            </tr>

            <?php

            while($info = $result->fetch_assoc()){
            ?>

            <tr>
                <td style="padding: 20px"><?php echo "{$info['name']}"; ?></td>
                <td style="padding: 20px"><?php echo "{$info['email']}"; ?></td>
                <td style="padding: 20px"><?php echo "{$info['phone']}"; ?></td>
                <td style="padding: 20px"><?php echo "{$info['message']}"; ?></td>
            </tr>

            <?php
               }
            ?>
        </table>
</center>   
    </div>
     


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>