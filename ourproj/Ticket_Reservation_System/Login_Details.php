<!DOCTYPE html>
<html lang="en">

<head>

    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/angular.min.js"></script>


</head>

<body>

<!--Checking with DB-->
<?php
session_start();
include('Config\database.php');
include('header.html');

if(isset($_POST['username'])) {
  $sql = "SELECT nc_id,role FROM normal_customer WHERE user_name = '".$_POST['username']."' and nc_password = '".$_POST['password']."'";
  $result = mysql_query($sql);

  $count = mysql_num_rows($result);

  if($count == 1) {
      //session_register("user_name");
      $_SESSION['login_user'] = $_POST['username'];
      $row = mysql_fetch_assoc( $result );
      if($row['role'] == 'admin'){
        header("location: addmoviedetails.html");
      }
      else{
        header("location: User_Profile.html");
      }
  }else {
    mysql_query($query);
      $alert = ' <script type=text/javascript>
      alert("Your Login Name or Password is invalid")
          </script>';
          print $alert;
  }
}


?>



<!--//////////////////////////////////////-->

<form class="form-horizontal" role="form" method="POST"  name="myForm" >
    <header>
        <div class="container">

              <div class="row">
                <div class="col-md-2">
                    <div class="panel-group">
                          <div class="panel-body">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel-group">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Login</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                        </div>
                                        <div class="col-sm-4">
                                            <img src="images/dummyUser.png">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Username:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Password:</label>
                                        <div class="col-sm-4">
                                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                        </div>

                                       <a link="#"> forget password?</a>

                                    </div>

                                </form>
                                <div class="panel-footer" style="text-align:center">
<!--
                                    <button type="submit" class="btn btn-success">
                                        <span class="glyphicon glyphicon-log-in" onclick="window.location.href='Ticket_Reservation_Details/User_Profile.html'">&nbsp</span>Login
                                    </button>
-->
                                    
                                    <button type="button" class="btn btn-submit" onclick="window.location.href='User_Profile.html'"><span class="glyphicon glyphicon-login">&nbsp</span>Login
                                    </button>


                                    <!--<button class="btn btn-success" type="button" id="loginButton">
                                                  <span class="glyphicon glyphicon-login">&nbsp</span>Login
                                    </button>-->

                                    <button type="button" class="btn btn-danger" onclick="window.location.href='User_Registration.html'"><span class="glyphicon glyphicon-plus">&nbsp</span>New registration
                                    </button>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-lg"></div>
            </div>
</form>

<footer>

</footer>

</body>
</html>
