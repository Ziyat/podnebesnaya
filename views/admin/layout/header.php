<!DOCTYPE html>
<html lang="<?php  echo $_SESSION['lang'] ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Поднебесная | <?php echo $titlePage; ?></title>

    <!-- Bootstrap -->

    <link href="<?php ROOT;?>/template/content/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php ROOT;?>/template/content/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="<?php ROOT;?>/template/content/css/animate.css" rel="stylesheet">
    <link href="<?php ROOT;?>/template/content/css/admin.css" rel="stylesheet">
    <link href="<?php ROOT;?>/template/content/fontAwesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php ROOT;?>/template/content/css/blueimp-gallery.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php ROOT;?>/template/content/img/icons/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php ROOT;?>/template/content/img/icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php ROOT;?>/template/content/img/icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php ROOT;?>/template/content/img/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php ROOT;?>/template/content/img/icons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php ROOT;?>/template/content/img/icons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php ROOT;?>/template/content/img/icons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php ROOT;?>/template/content/img/icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php ROOT;?>/template/content/img/icons/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php ROOT;?>/template/content/img/icons/apple-touch-icon-180x180.png" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


<!-- <nav class="animated fadeInUp navbar navbar-default navbar-static-top">
  <div class="container">
    <p class="navbar-text navbar-left"><a href="#" class="navbar-link"><span class="fa fa-edit"> </span> <?php echo ADMIN; ?></a></p>
    <p class="navbar-text navbar-right"><a href="#" class="navbar-link"><span class="fa fa-sign-out"> </span> <?php echo LOGOUT; ?></a></p>
  </div>
</nav> -->
 <div id="wrapper">
        <div class="overlay"></div>
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav text-capitalize">
                <li class="sidebar-brand">
                    <a href="/">
                       <?php echo BRAND; ?>
                    </a>
                </li>
                <li class="is-open">
                    <a href="/<?php echo $lang; ?>/admin/product"><?php echo ADMIN_PRODUCTS; ?></a>
                </li>
                <li>
                    <a href="/<?php echo $lang; ?>/admin/category""><?php echo ADMIN_CATS; ?></a>
                </li>
                <li>
                    <a href="/<?php echo $lang; ?>/admin/cuisine"><?php echo ADMIN_THE_CUISINES; ?></a>
                </li>
                <li>
                    <a href="/<?php echo $lang; ?>/admin/order"><?php echo ADMIN_ORDERS.' <span class="badge">'.Order::getNewOrderCount().'</span>'; ?></a>
                </li>
                <li>
                    <a href="/<?php echo $lang; ?>/admin/review"><?php echo ADMIN_REVIEWS; ?></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo GALLERY; ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <!-- <li class="dropdown-header">Dropdown heading</li> -->
                    <li><a href="/<?php echo $lang; ?>/admin/gallery"><?php echo ADMIN_CATS; ?></a></li>
                    <li><a href="/<?php echo $lang; ?>/admin/photo"><?php echo PHOTOS; ?></a></li>
                  </ul>
                </li>
               
                <li>
                    <a href="/switch/en">EN</a>                    
                </li>
                <li>
                    <a href="/switch/cn">中文</a>                    
                </li>
                <li>
                    <a href="/switch/ru">РУ</a>
                </li>
                <li>
                    <a href="/<?php echo $lang; ?>/user/logout"><span class="fa fa-sign-out"></span> <?php echo ADMIN_SIGNOUT; ?></a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
              

