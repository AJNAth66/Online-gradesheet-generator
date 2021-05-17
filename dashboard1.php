<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {
    header("Location: index.php");
    }
    else{
        ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CSE | Dashboard</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
              <?php include('includes/topbar.php');?>
            <div class="content-wrapper">
                <div class="content-container">

                    <?php include('includes/leftbar1.php');?>

                    <div class="main-page">
                        <div class="container">
                            <div class="row page-title-div">
                                <div class="col-lg-12 bg-info">
                                    <h2 class="title ">HOME</h2>

                                </div>
                               
                            </div>
                            

                        </div>
                        

                        <section class="section">
                            <div class="container">
                                <div class="row ">
                                    <div class="col-xs-6 ">
                                        <a class="dashboard-stat" href="manage-students.php">
<?php
$sql1 ="SELECT StudentId from tblstudents ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query1->rowCount();
?>
                                            <div class="thumbnail">
                                                <span class="caption">Number of Students</span>
                                                <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            
                                            <img src="student.jpg"></div>
                                        </a>
                                        
                                    </div>

                                    <div class="col-xs-6">
                                        <a class="dashboard-stat" href="manage-subjects.php">
<?php
$sql ="SELECT id from  tblsubjects ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>                                          
                                            <div class="thumbnail">
                                            <span class="caption">Number of Subjects</span>
                                            <span class="number counter"><?php echo htmlentities($totalsubjects);?></span>
                                            <img src="Subject.jpg"></div>
                                        </a>
                                    </div>
                                   
                                </div>
                               
                            </div>
                            
                        </section>
                        

                    </div>
                    

                </div>
                
            </div>
            
        </div>
        
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        
        <script src="js/lobipanel/lobipanel.min.js"></script>
               
        <script src="js/main.js"></script>
    </body>

    <div class="foot"><footer>

</footer> </div>

<style> .foot{text-align: center; */}</style>
</html>
<?php } ?>
