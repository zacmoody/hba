
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Health and Beauty</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://themes.iamabdus.com/bigbag/1.0/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">

    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    
    <!-- CUSTOM CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>


    <div class="main-wrapper">

      <!-- HEADER -->
      <div class="header clearfix">

        <!-- TOPBAR -->
        <div class="topBar">
          <div class="container">
            <div class="row">
<!-- *********************** logo tabs here ****************** -->
              <div class="col-md-6 hidden-sm hidden-xs">
                <?php include("./includes/topLeftTabs.php"); ?>
              </div>
<!-- *********************** logo tabs here ****************** -->
              <div class="col-md-6 col-xs-12">
                <?php include("./includes/topRightTabs.php"); ?>
              </div>
            </div>
          </div>

<!-- *********************** second section starts here ****************** --> 
          <?php include("./includes/logo_searchBar.php"); ?>
<!-- *********************** second section ends here ****************** -->               
        </div>

        <!-- NAVBAR -->
        <?php include("./includes/navBar.php"); ?>
        <!-- NAVBAR -->
      </div>

      <!-- BREADCRUMB -->
      <section style="margin-top:30px;">
        <?php include("./includes/breadcrumbs.php"); ?>
      </section> 
      <!-- BREADCRUMB -->

      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix" style="padding-top:10px;">
        <div class="container">         
          <?php include("./includes/catalogueItems.php"); ?>
        </div>
      </section>
      <!-- MAIN CONTENT SECTION -->

      <!-- FOOTER -->
      <?php include("./includes/footer.php"); ?>
      <!-- FOOTER -->
    </div>
    
    <!-- LOGIN MODAL -->
    <?php include("./includes/loginModal.php"); ?>

    <!-- SIGN UP MODAL -->
    <?php include("./includes/signupModal.php"); ?>

    <!-- PORDUCT QUICK VIEW MODAL -->
    <?php include("./includes/quickViewModal.php"); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://themes.iamabdus.com/bigbag/1.0/plugins/jquery-ui/jquery-ui.js"></script>
    <script src="http://themes.iamabdus.com/bigbag/1.0/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://themes.iamabdus.com/bigbag/1.0/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="http://themes.iamabdus.com/bigbag/1.0/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="http://themes.iamabdus.com/bigbag/1.0/plugins/owl-carousel/owl.carousel.js"></script>
    <script src="http://themes.iamabdus.com/bigbag/1.0/options/optionswitcher.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>