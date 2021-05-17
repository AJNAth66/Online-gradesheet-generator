<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{

    echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DUIET COMPUETR SCIENCE</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <style>
body {
  background-image: url('dept.jpg');
  background-attachment: fixed;
  background-size: cover;
}
</style>
    </head>
    <body class="top-navbar-fixed">
        
        <div class="main-wrapper" >  <nav id="mainNavbar" class="navbar top-navbar bg-dark box-shadow">
                <div class="container-jumbotron">
                    <div class="row">
                        <div class="navbar-header no-padding">

                            <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                             
                                    <li style="font-size: 20px"><a href="#" class="color-white text-center"><i class="fa fa-phone"></i> Contact Info</a></li>
                                    <li style="font-size: 20px"><a href="https://dibru.ac.in/department-of-computer-science-and-engineering-duiet/" class="color-white text-center"><i class="fa fa-info"></i> About Us</a></li>
                                    
                        
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container">

                <h1 align="center" class="jumbotron bg-info">DUIET COMPUTER SCIENCE</h1>
                <div class="row">

 

<div class="col-lg-6">
                        <section class="section">
                            <div class="row mt-40">
                                <div class="col-lg-10 col-md-offset-1 pt-50">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>Admin Login</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                    <div class="section-title">
                                                    
                                                    </div>

                                                    <form class="form-horizontal" method="post">
                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="col-lg-4 col-sm-2 control-label">Username :</label>
                                                            <div class="col-lg-6 col-sm-10">
                                                                <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="UserName">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputPassword3" class="col-lg-4 col-sm-2 control-label">Password :</label>
                                                            <div class="col-lg-6 col-sm-10">
                                                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                            </div>
                                                        </div>

                                                        <div class="form-group mt-20">
                                                            <div class="col-sm-offset-2 col-sm-10">

                                                                <button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Sign in</button>
                                                            </div>
                                                        </div>
                                                    </form>




                                                </div>
                                            </div>
                                            
                                           
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </section>

                    </div>

                    <div class="col-lg-6 ">

<section class="section">
                            <div class="row mt-40">
                                <div class="col-lg-10 col-md-offset-1 pt-50">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel"  style="background-color: #decbc3;">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>Gradesheet Available</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                    <form class="form-horizontal" method="post">
                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-6 control-label">Search your result</label>
                                                            <div class="col-sm-6">
                                                               <a href="find-result.php">CLICK HERE</a>
                                                            </div>
                                                        </div>

                                                    </form>




                                                </div>
                                            </div>
                                            

                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </section>
                    </div>
                    
                    
                </div>
                <div class="row">
                    <div class="row mt-40">
                                <div class="col-lg-10 col-md-offset-1 pt-50">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel"  style="background-color: #decbc3;">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>Official Corner</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                    <form class="form-horizontal" method="post">
                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-6 control-label">Login & Registration</label>
                                                            <div class="col-sm-6">
                                                               <a href="index2.php">CLICK HERE</a>
                                                            </div>
                                                        </div>

                                                    </form>




                                                </div>
                                            </div>
                                            

                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
            </div>

        </div>
        
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        
        <script src="js/main.js"></script>
        <script>
            
            $(function () {
            $(document).scroll(function () {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
        </script>
    </body>
</html>
