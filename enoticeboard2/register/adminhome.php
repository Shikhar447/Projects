<?php
include_once 'dbconfig.php';
if(!$admin->is_loggedin())
{
	$admin->redirect('admin.php');
}
$admin_id = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$admin_id));
$adminRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The Online Portal Where You Can Access Your Academics And Hostel Notices Anytime.">
    <meta name="author" content="Shikhar Saran Srivastava">

    <title>E-Notice Board</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" href="../img/Noticeboardlogo.jpg" type="image/jpg" sizes="16x16">
    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="">
  <meta name="apple-mobile-web-app-title" content="E-notice Board">
  <meta name="theme-color" content="#f05f40">

<meta name="msapplication-navbutton-color" content="#f05f40">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#f05f40">
<meta name="apple-mobile-web-app-status-bar-style" content="#f05f40">
  <link rel="apple-touch-icon" href="../img/Noticeboardlogo.jpg">
  <meta name="msapplication-TileImage" content="../img/Noticeboardlogo.jpg">
  <meta name="msapplication-TileColor" content="#f05f40">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
*{
	margin:0;
	padding:0;
}
input{
	margin-bottom:30px;
}

</style>
</head>


<body oncontextmenu="return false">

<div id="wrapper">
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="adminhome.php">E-Notice Board</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
			<li class="dropdown">
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
          
                        <li><a href="adminlogout.php?logout=true"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
		
                <!-- /.sidebar-collapse -->

            <!-- /.navbar-top-links -->
			</nav>
			<div id="page-wrapper" style="height:1506px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Admin Panel</h1>
							<form action="info.php" method="POST" enctype="multipart/form-data">
							<label for="summary">Summary :</label>
							<textarea rows="3" cols="30" name="summary"></textarea><br/>
							<label for="file">File Upload :</label><input type="file" style="margin-left:50px;margin-top:20px;" name="fileToUpload" id="fileToUpload"/>
							<label for="hostel">Hostel :</label>
							<input type="checkbox" name="hostel[]" value="K.P-6">K.P-6</input>
							<input type="checkbox" name="hostel[]" value="K.P-9">K.P-9</input>
							<input type="checkbox" name="hostel[]" value="Q.C-4">Q.C-4</input><br/>
							<label for="branch">Branch :</label>
							<input type="checkbox" name="branch[]" value="CSE">CSE</input>
							<input type="checkbox" name="branch[]" value="I.T">I.T</input><br/>
							<label for="hostel">Year :</label>
							<input type="checkbox" name="year[]" value="2011">2011</input>
							<input type="checkbox" name="year[]" value="2012">2012</input><br/>
							<input type="submit" value="Upload" name="submit"/>
							</form>

</div>
</div>
</div>
</div>
</div>
<!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>