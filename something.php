<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <?php require_once('/includes/header_users.php'); ?>
      <?php require_once('/includes/nav.php'); ?>

      <div class="row">

          <div class="col s4">
            <div class="row">

                      <div class="col s12 m6">
                        <div class="card blue-grey darken-1">
                          <div class="card-content white-text">
                            <span class="card-title">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                          </div>
                          <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
                          </div>
                        </div>
                      </div>
                      </div>

          </div>
          <div class="col s4">
            <!-- Promo Content 2 goes here -->
          </div>
          <div class="col s4">
            <!-- Promo Content 3 goes here -->
          </div>

        </div>










      <?php require_once('/includes/footer.php'); ?>
    </body>
  </html>
