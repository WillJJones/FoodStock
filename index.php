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



                      <?php
                      require_once 'users/init.php';
                      $db = DB::getInstance();
                      //PHP Goes Here!

                      if(isset($_GET['id'])) $userID = Input::get('id');
                      else $userID = $user->data()->id;

                      $userQ = $db->query("SELECT * FROM profiles LEFT JOIN users ON user_id = users.id WHERE user_id = ?",array($userID));
                      if ($userQ->count() > 0) {
                      	$thatUser = $userQ->first();

                      	if($user->isLoggedIn() && $user->data()->id == $userID)
                      		{
                      		$editbio = ' <small><a href="edit_profile.php">Edit Bio</a></small>';
                      		}
                      	else
                      		{
                      		$editbio = '';
                      		}

                      	$ususername = ucfirst($thatUser->username)."'s Profile";
                      	$grav = get_gravatar(strtolower(trim($thatUser->email)));
                      	$useravatar = '<img src="'.$grav.'" class="circle responsive-img" alt="'.$ususername.'">';
                      	$usbio = html_entity_decode($thatUser->bio);
                      	//Uncomment out the line below to see what's available to you.
                      	//dump($thisUser);
                      	}
                      else
                      	{
                      	$ususername = '404';
                      	$usbio = 'User not found';
                      	$useravatar = '';
                      	$editbio = ' <small><a href="/">Go to the homepage</a></small>';
                      	}
                      ?>

                      <div class="row">
                           <div class="col s6 offset-s6">
                             <div class="card-panel teal">
                                     <span class="white-text">
                                       <h5>Your Profile</h5>
                                       <?php echo $useravatar;?>
                                     </span>
                             </div>
                           </div>
                         </div>





                  </div> <!-- Container -->


                </main>

            <?php require_once('/includes/footer.php'); ?>


              </body>
              <!--end BODY-->
  </html>
