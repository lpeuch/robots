<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/jumbotron/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="List of robots">
    <meta name="keywords" content="robot, drone, robotics, robotique, innovation"> 
    <meta name="author" content="Peuch Lucile">
    <link rel="shortcut icon" href="img/icon.png">

    <title>Robotics</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/design.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/offcanvas.css">
    <link href="bootstrap/css/caroussel.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/jumbotron.css" rel="stylesheet">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-32854380-1', 'lucilepeuch.fr');
      ga('send', 'pageview');

    </script>

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Robotics</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li>
                <a href="index.html">Home</a>
              </li>
              <li class="active">
                <a href="#?letter=a">Robots</a>
              </li>
              <li>
                <a href="about.html">About</a>
              </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class="container new-color">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="pull-right visible-xs">
          <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
        </div>
        
        <div class="col-xs-12 col-sm-10">
        <?php 
          ini_set('error_reporting', E_STRICT);
          
          // Access the database
          $db = new PDO('sqlite:database/robots.db');

          $arrRes = array();      
          $i = 0;
          // Get back all existing robots
          $arr = $db->query('SELECT * FROM robots ORDER BY name');

          /* Build a real table to get robot information */
          if($arr !== false) {
            foreach($arr as $row) {
              $arrRes[$i]->name = $row['name'];
              $arrRes[$i]->description = $row['description'];
              $arrRes[$i]->humanoide = $row['humanoide'];
              $arrRes[$i]->website = $row['website'];
              $arrRes[$i]->price = $row['price'];
              $arrRes[$i]->size = $row['size'];
              $arrRes[$i]->weight = $row['weight'];
              $arrRes[$i]->origine = $row['origine'];
              $arrRes[$i]->picture = $row['picture'];
              $arrRes[$i]->year = $row['year'];
              $arrRes[$i]->createby = $row['createby'];
              $i++;
            }
          }

          $letter = $_GET['letter'];
          $letterBot = array();
          $letterBot = getFirstLetter($arrRes, $letter);

          if(count($letterBot) <=0) {
            $robotHtml = '<h3>No robot is currently avalaible in this section :\'(</h3>';

            echo $robotHtml;
          } else {

            foreach($letterBot as $robot) {
              $robotHtml = '<hr class="featurette-divider">';
              $robotHtml .= '<div class="row featurette">';
              $robotHtml .= '  <div class="col-md-7">';
              $robotHtml .= '    <h2 class="featurette-heading robot-name">'.$robot->name.'</h2><h4><a class="text-muted" href="'.$robot->website.'">Website</a></h4>';
              $robotHtml .= '    <p class="lead">'.$robot->description.'</p>';
              $robotHtml .= '<p>';

              if(strlen($robot->createby) != 0) 
                $robotHtml .= '    <b>Creator</b>: '.$robot->createby.'<br/>';
              if(strlen($robot->origine) != 0)
                $robotHtml .= '    <b>Origin</b>: '.$robot->origine.'<br/>';
              if(strlen($robot->size) != 0) {
                $robotHtml .= '    <b>Size</b>: '.$robot->size.'<br/>';
              }
              if(strlen($robot->weight) != 0)
                $robotHtml .= '    <b>Weight</b>: '.$robot->weight.'<br/>';
              if(strlen($robot->price) != 0)
                $robotHtml .= '    <b>Price</b>: '.$robot->price;
              $robotHtml .= '</p>';
              $robotHtml .= '  </div>';
              $robotHtml .= '  <div class="col-md-5">';
              $robotHtml .= '    <img class="img-rounded featurette-image img-responsive" alt="500x500" src="img/robots/'.$robot->picture.'"/>';
              $robotHtml .= '  </div>';
              $robotHtml .= '</div>';

              echo $robotHtml;
            }
          }

        
          

          // Return a table of all robots which name corresponds to the letter to find
          function getFirstLetter($table, $letter) {
            $isLetter=true;
            $res = array();
            $i=0;
            $j=0;
            while($isLetter==true && $i<count($table)) {
              $l = substr($table[$i]->name, 0, 1);
              if(strcasecmp($l, $letter)==0) {
                $res[$j] = array();
                $res[$j] = $table[$i];
                $j++;
              }
              $i++;
            }
            return $res;
          }
        ?>
        </div>

        <div class="col-xs-15 col-sm-1 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <?php
              $bodyStart ="";
              $tab_letters = array("a" , "b" , "c" , "d" , "e" , "f" , "g" , "h" , "i" , "j" , "k", "l" , "m" , "n" , "o" , "p" , "q" , "r" , "s" , "t" , "u" , "v" , "w" , "x" , "y" , "z");
            
              $bodyStart .='<a href="?letter='.$tab_letters[0].'" id="'.$tab_letters[0].'" class="list-group-item active" >'.strtoupper($tab_letters[0]).'</a>';
              

              for($i=1; $i<count($tab_letters); $i++){
                $bodyStart .='<a href="?letter='.$tab_letters[$i].'" id="'.$tab_letters[$i].'" class="list-group-item">'.strtoupper($tab_letters[$i]).'</a>';
              }
              echo($bodyStart);
            ?>
          </div>
        </div>
      </div>

      <hr>

      <footer>
        <div class="row">
        <div class="col-md-8">
          <p>© All rights reserved - Lucile Peuch</p>
        </div>
        <div class="col-md-4">
          <a href="mailto:peuch.lucile@gmail.com" >peuch.lucile@gmail.com</a>
        </div>
      </div>

      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/offcanvas.js"></script>
    <script src="bootstrap/js/docs.min.js"></script>

    <script src="js/script.js"></script>
  
</body></html>