<?php
//if the session is not already started
if(session_id() == ''){
    session_start();
}
$phpSelf = $_SERVER['PHP_SELF'];
$phpSelfElements = explode('/', $phpSelf);
$scriptName = $phpSelfElements[count($phpSelfElements) - 1]; //go vrakja indeksot na posledniot element

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if($scriptName == 'index.php'){echo 'class="active"'; } ?> >
                        <a href="index.php">About</a>
                    </li>
                    <li <?php if($scriptName == 'services.php'){echo 'class="active"'; } ?>  >
                        <a href="services.php">Services</a>
                    </li>
                    <li <?php if($scriptName == 'contact.php'){echo 'class="active"'; } ?> >
                        <a href="contact.php">Contact</a>
                    </li>
                    
                    <?php if(isset($_SESSION['logged_in'])){   ?>
                      
                    <li>
                        <a href="logout.php">Log out</a>
                    </li>
                     
                    <?php  } ?>
        
                </ul>
            </div> 
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container -->
    </nav>