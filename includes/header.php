<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $title; ?> | Home
    </title>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <link rel="stylesheet" href="css/kube.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main.less">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/slicknav.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/functions.js"></script>
    <?php include("includes/favicon.php");?>
</head>
<body>

<?php include("includes/mobile_menu.php");?>

<div class="header">
    <div class="decorative_line"></div>
    <div class="nav">
    	<div class="nav_wrapper">
            <a href="index.php"><img src="images/encaasa1.jpg"></a>
                <ul id="navMenu">   
                    <li><a href="index.php">Home</a></li>
                    <li class="item">
                        <a href="bewindvoering.php">
                            Bewindvoering
                        </a>
                        <div class="submenu">
                            <div class="submenu_item"><span><a class="a" href="budgetbeheer.php">Budgetbeheer</a></span></div>
                        </div>
                    </li>
                    <li class="item">
                        <a href="schuldhulpverlening.php">
                            Schuldhulpverlening
                        </a>
                        <div class="submenu">
                            <div class="submenu_item"><span><a class="a" href="m_traject.php">Minnelijk Traject</a></span></div>
                            <div class="submenu_item"><span><a class="a" href="wsnp.php">WSNP</a></span></div>
                        </div>
                    </li>
                    <li><a class="a" href="formulieren.php">Formulieren</a></li>
                    <li><a class="a" href="administratie.php">Encaasa Administratie</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
        </div>
    </div>
    <i class="fa fa-bars menu_btn" aria-hidden="true"></i>
</div>


