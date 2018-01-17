<nav>
  <div class="nav-wrapper">
    <a class="brand-logo center">FoodStock</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="users/login.php">Log in</a></li>
      <li><a href="something.php">Test Breadcrumbs</a></li>
      <li><a href="collapsible.html">JavaScript</a></li>
    </ul>
  </div>
</nav>

<nav>
  <div class="nav-wrapper">
    <div class="col s12">
      <center>
        <?php
      function breadcrumbs($separator = ' &raquo; ', $home = 'Home') {

          $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
          $base_url = substr($_SERVER['SERVER_PROTOCOL'], 0, strpos($_SERVER['SERVER_PROTOCOL'], '/')) . '://' . $_SERVER['HTTP_HOST'] . '/';
          $breadcrumbs = array("<a href=\"$base_url\">$home</a>");
          $tmp = array_keys($path);
          $last = end($tmp);
          unset($tmp);

          foreach ($path as $x => $crumb) {
              $title = ucwords(str_replace(array('.php', '_'), array('', ' '), $crumb));
      	if ($x == 1){
      	        $breadcrumbs[]  = "<a href=\"$base_url$crumb\">$title</a>";
      	}elseif ($x > 1 && $x < $last){
      		$tmp = "<a href=\"$base_url";
      		for($i = 1; $i <= $x; $i++){
      			$tmp .= $path[$i] . '/';
      		}
                      $tmp .= "\">$title</a>";
      		$breadcrumbs[] = $tmp;
      		unset($tmp);
              }else{
                      $breadcrumbs[] = "$title";
      	}
          }

          return implode($separator, $breadcrumbs);
      }
      echo breadcrumbs();

      ?>
 </center>
    </div>
  </div>
</nav>
