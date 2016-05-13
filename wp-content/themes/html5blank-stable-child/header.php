<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href='https://fonts.googleapis.com/css?family=Scheherazade' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,900,700,700italic,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php wp_head(); ?>

</head>
<body id="TopOfPage">

<header class="<?php if (is_front_page()){echo 'home';} else { echo "page logo"; }?>">

  <div id="wrapper">
      <div class="overlay"></div>

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
          <ul class="nav sidebar-nav">
              <li class="sidebar-brand">
                  <a href="#">
                     Organic Ideas</br>
                     And Designs
                  </a>
              </li>

              <?php
                $args = [
                  'theme_location' => 'primary'
                ]
              ?>

              <?php wp_nav_menu($args);?>
          </ul>
      </nav>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
          <span class="hamb-top"></span>
          <span class="hamb-middle"></span>
          <span class="hamb-bottom"></span>
        </button>
      </div>

    <div class="logo_container">
      <?php if (is_front_page()) {
          include 'logo.php';
        } else {
          (is_single());
        }
      ?>
    </div>
</header>
