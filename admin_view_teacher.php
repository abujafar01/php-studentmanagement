<?php
 session_start();
 error_reporting();

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

 $data=mysqli_connect($host,$user, $password,$db);

 $sql="SELECT * FROM teacher";

 $result=mysqli_query($data,$sql);


 if($_GET['teacher_id']){

    $t_id=$_GET['teacher_id'];

    $sql2="DELETE FROM teacher WHERE id='$t_id' ";

    $result2=mysqli_query($data,$sql2);
    

    if($result2){
      header ('location:admin_view_teacher.php');
    }
 }

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


    <style type="text/css">


        .table_th{
          padding: 20px;
          font-size: 20px;
        } 

        .table_td{
          padding: 20px;
          background: skyblue;
        }


    </style>

</head>
<body>


    <?php
      
      include 'addmin_sidebar.php';


    ?>
   

    <div class="content">
      <center>
        <h1>View All Teacher Data</h1>


        <table border="1px">

              <tr>

                  <th class="table_th">Teacher Name</th>
                  <th class="table_th">About Teacher</th>
                  <th class="table_th">image</th>
                  <th class="table_th">Delete</th>
              </tr>



              <?php
              
                while($info=$result->fetch_assoc()){

              
              
              ?>


              <tr>
                <td class="table_td"><?php echo "{$info['name']}"?></td>
                <td class="table_td"><?php echo "{$info['description']}"?></td>
                <td class="table_td " ><img heigth="100px" weight="100px"  src="<?php echo "{$info['image']}"?>" alt=""></td>

                  <td class="table_td">

                      <?php 
                      echo  "
                      <a onClick=\"javascript:return conform('Are Yor Sure To Delete This');\" class='btn btn-danger' href='admin_view_teacher.php?teacher_id={$info['id']}'>Delete</a>";

                      ?>
                    
                </td>

              </tr>



              <?php
              
            }
              
              ?>

        </table>
      </center> 
        
    </div>
     


    

</body>
</html>