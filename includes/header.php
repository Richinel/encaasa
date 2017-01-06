<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $title; ?> | Encaasa
    </title>

    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <meta name="title" content="Encaasa Bewindvoering BV">
    <meta name="author" content="RSD">
    <meta name="keywords" content="bewindvoering, schuldhulpverlening, rotterdam, encaasa, beschermingsbewind, budgetbeheer, minnelijk traject, wsnp, administratie">

    <link rel="stylesheet" href="css/kube.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main.less">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/slicknav.css" />

    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>

    <?php include("includes/favicon.php");?>
</head>
<body>

<?php include("includes/mobile_menu.php");?>

<div class="header">
    <div class="decorative_line"></div>
    <div class="nav">
    	<div class="nav_wrapper">
            <a href="index"><img src="images/encaasa1.jpg"></a>
                <ul id="navMenu">   
                    <li><a href="index">Home</a></li>
                    <li class="item">
                        <a href="bewindvoering">
                            Bewindvoering
                        </a>
                        <div class="submenu">
                            <div class="submenu_item"><span><a class="a" href="budgetbeheer">Budgetbeheer</a></span></div>
                        </div>
                    </li>
                    <li class="item">
                        <a href="schuldhulpverlening">
                            Schuldhulpverlening
                        </a>
                        <div class="submenu">
                            <div class="submenu_item"><span><a class="a" href="m_traject">Minnelijk Traject</a></span></div>
                            <div class="submenu_item"><span><a class="a" href="wsnp">WSNP</a></span></div>
                        </div>
                    </li>
                    <li><a class="a" href="formulieren">Formulieren</a></li>
                    <li><a class="a" href="administratie">Encaasa Administratie</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
        </div>
    </div>
    <i class="fa fa-bars menu_btn" aria-hidden="true"></i>
</div>
<?php include("includes/dh_panel.php");?>
<?php include("includes/ci.php");?>

