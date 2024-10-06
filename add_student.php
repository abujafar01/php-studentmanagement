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

 if(isset($_POST['add_student'])){
    
    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_password=$_POST['password'];
    $usertype="student";
    

    $check="SELECT * FROM users WHERE username= '$username'";

    $check_user=mysqli_query($data, $check);


    $row_count=mysqli_num_rows($check_user);

    if($row_count==1){


        echo " <script type='text/javascript'> 
                    
        alert('Username Already Exist. Try Again Please');
        </script>";

      
    }
    else{

    



                
                $sql="INSERT INTO `users`(`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES ('id','$username','$user_email','$user_phone', ' $usertype',' $user_password')";

                $result=mysqli_query($data,$sql);

                if($result){

                    echo " <script type='text/javascript'> 
                    
                            alert('Data Upload Success');
                    </script>";
                                }
                    else{
                        echo "Upload not Successful";
                    }
                }
 }






?>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>


    <style type="text/css">

       label{

           display: inline-block;
          text-align: right;
          width: 100px; 
          padding: 10px 0; 
          

       }
       .div_deg{
          background: skyblue;
          width: 400px;
          padding: 70px 0px;
       }
       
    </style>



    <?php
        
        include 'addmin_css.php';
      
    ?>
</head>
<body>


    <?php
      
      include 'addmin_sidebar.php';


    ?>
   

    <div class="content">
      <center>
        <h1>Add Student</h1>
        


        <div class="div_deg">
            <form action="#" method="POST">

                 <div>
                      <label for="">Username</label>
                      <input type="text" name="name">
                  </div>
                  <div>
                      <label for="">Email</label>
                      <input type="email" name="email">
                  </div>
                  <div>
                      <label for="">Phone</label>
                      <input type="phone" name="phone">
                  </div>
                  <div>
                      <label for="">Password</label>
                      <input type="text" name="password">
                  </div>
                  <div>
                      <input type="submit" class="btn btn-primary" name="add_student" value="Add Student">
                  </div>

            </form>
        </div>
      </center>
        
    </div>


   
     


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>