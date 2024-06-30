
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) 
  {
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    $sql ="SELECT ID FROM tbladmin WHERE UserName=:username and Password=:password";
    $query=$dbh->prepare($sql);
    $query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['sturecmsaid']=$result->ID;
}

  if(!empty($_POST["remember"])) {
//COOKIES for username
setcookie ("user_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
//COOKIES for password
setcookie ("userpassword",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
} else {
if(isset($_COOKIE["user_login"])) {
setcookie ("user_login","");
if(isset($_COOKIE["userpassword"])) {
setcookie ("userpassword","");
        }
      }
}
$_SESSION['login']=$_POST['username'];
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title>SmartGen|| Admin Login Page</title>
    <link rel = "icon" href ="../../Large.png">
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="../assets/css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="author" content="Duchel Decarte" />
  <meta name="robots" content="index,follow">
  <meta name="keywords" content="SMARTGEN, smartgen, SmartGen Scholar,Home classes, HOME CLASSES, Cour de Repetition, TEACHERS, teacher, encadreur, professeur, student, etudiant" />
  
   
  </head>
  
<body class="bg-dark" style=" background-image: url('../../images/school2.jpg'); background-repeat: no-repeat; background-size: cover;">


<div class="sufee-login d-flex align-content-center flex-wrap" >
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <img src = "../../Large.png" width = "150px">
                <h3 style="color:black">Admin login </h3>
                <hr  color="red"/>
            </div>
            <div class="login-form">
                <form action="" method="post" name="login">
                    
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" placeholder="User Name" required="true" name="username">
                    </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                    </div>
                            <div class="checkbox">
                                <label class="pull-left">
                            <a href="../index.php">Back Home!!</a>
                                <label class="pull-right">
                            <a href="forgot-password.php" style="padding-left: 250px">Forgot Password?</a>
                        </label>

                            </div>
                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="login">Login</button>
                            
                        
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>