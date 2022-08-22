<?php
session_start();
if(empty($_SESSION['username'])){
header("Location: login.php");
include "daboard.php";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/home.css">
<!--Script CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.css" />
<!--Script Javascript-->
<script language="javascript" src="js/jquery-1.9.1.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alfaris</title>
</head>
<div class="navbar navbar-default navbar-fixed-top">
	<div class="navbar-inner">
    	<div class="container">
        	<button type="button" data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
            	<span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            	<a class="brand">
                Alfaris Solution
                </a>
                	<div class="nav-collapse collapse">
                    	<ul class="nav">
                        	<li class="active"><a href="home.php">Home<b class="icon-home"></b></a></li>
                            <!-- Disable 

                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pemasukan<b class="caret"></b></a>
                            	<ul class="dropdown-menu">
                                	<li><a href="akb98.php">AKB98</a></li>
                                    <li><a href="#">Private</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">WorkShop</a></li>
                                    <li><a href="#">Other</a></li>
                                </ul>
                            </li>

                            -->
                            
                            <li><a href="masuk.php">Pemasukan</a></li>
                            <li><a href="keluar.php">Pengeluaran</a></li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="lap_masuk.php">Pemasukan</a></li>
                                    <li><a href="lap_keluar.php">Pengeluaran</a></li>
                                </ul>
                                </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <?php
                                    
                                    echo "Wellcome  ".$_SESSION['username'];
                                ?>
                                <b class="caret"></b></a>
                            	<ul class="dropdown-menu">
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
        </div><!--Container-->
    </div><!--Navbar inner-->
</div><!--Navbar Fixed Top-->
<body>
<div id="conten">
   
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
