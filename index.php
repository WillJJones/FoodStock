<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
              <!--Begin BODY-->
              <body>
                <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script> <!--Import jQuery-->
                <script type="text/javascript" src="js/materialize.min.js"></script><!--Import materialize-->

                    <header>
                      <?php require_once('/includes/title.php'); ?> <!--Set sitewide title.-->
                      <?php require_once('/includes/header_users.php'); ?> <!--User stuff, check if a user is logged in etc.-->
                      <?php require_once('/includes/nav.php'); ?> <!--Import page navigation sitewide.-->
                    </header>

                <main>
                  <div class="container">

                    <h3>Welcome <?php  echo $user->data()->fname; ?>!</h3>
                    <p>This is a test bit of wording to see how the site looks with normal paragraph text.</p>





                  </div> <!-- Container -->


                </main>

            <?php require_once('/includes/footer.php'); ?>


              </body>
              <!--end BODY-->
  </html>
