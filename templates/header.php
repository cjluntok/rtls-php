<!doctype html>
<html class="no-js" lang="eng">

<head>
  <meta charset="utf-8">
  <title>RTLS Solutions | Real Time Location Services</title>
  <meta name="description" content="AiRISTA Flow is a leader in real-time location services. Quickly discover how to optimize your business performance and transform your organization.">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/bootstrap/css/bootstrap-grid.min.css">  
  <link rel="stylesheet" href="dist/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/custom.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
  <script>
    $("html").css('overflow-y','hidden');
  </script>

  <meta name="theme-color" content="#fafafa">
</head>

<body>


<main id="page-container" class="container-fluid">
  <?php include_once('partials/loader.php');?>  
  <?php include_once('partials/backtotop.php'); ?>
    <?php include_once('navigation.php');?>


        <?php 
        if($template):
          if($template == 'home'):
            include_once('partials/main-page-banner.php');
          else:
            include_once('partials/page-banner.php');
          endif;
        endif;
        ?>
