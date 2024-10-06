<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
          <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- custom link -->
   <link rel="stylesheet" href="assets/css/style.css">
</head>
<body background="image/bnner-image22.jpg">
      <center>
          <div class="form-deg">
            <center class="title-deg">
              Login Form
              <h4>
                  <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();

                    echo $_SESSION['loginMessage'];
                  
                  ?>
              </h4>
            </center>
             <form action="login_check.php" method="POST"   class="login-form">
                  <div>
                      <label for="" class="label-deg">UserName</label>
                      <input type="text" name="username">
                  </div>
                  <div>
                      <label for="" class="label-deg">Password</label>
                      <input type="password" name="password">
                  </div>
                  <div class="submit">
                    
                      <input class="btn btn-primary" type="submit" name="submit" value="Login">
                  </div>
              </form>
          </div>
      </center>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            
</body>
</html>