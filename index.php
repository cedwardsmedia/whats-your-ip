<?
// Copyright (c) 2015-2016 Corey Edwards

// We don't want errors being shown to the user.
ini_set('display_errors', 0);

// In case php.ini isn't set right.
date_default_timezone_set('Universal');

if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])){
   // Get the IP address of the visitor from Cloudflare
      $IP = $_SERVER['HTTP_CF_CONNECTING_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
   // Get the IP address of the visitor from Heroku
      $ipAddresses = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
      $IP = trim(end($ipAddresses));
    } else {
   // Get the IP address of the visitor
    $IP = $_SERVER['REMOTE_ADDR'];
    }

if (strlen($IP) < 16) { // Check the length of the IP address to determine type
        $string = "<h1>" . $IP . "</h1>"; // IP address is version 4, so place it in <h1>
    } else {
        $string = "<h2>" . $IP . "</h2>"; // IP address is version 6, so place it in <h2> for size
    }

$agent = $_SERVER['HTTP_USER_AGENT']; // Set user agent string to $agent

if (stripos($agent, 'curl') !== false || stripos($agent, 'wget') !== false) {
   try {
     echo "⚠️  Your IP address is  " . $IP . "\r\n";
     exit();
   } catch (Exception $e) {
     echo "☠  " . $e->getMessage() . "\r\n"; // In case something does break
     exit(1);
   }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find our your IP address">
    <meta name="author" content="Corey Edwards">

    <title>What's your IP?</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap-theme.min.css">

    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div id="wrap">
    <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><i class="fa fa-chevron-left"></i><i class="fa fa-question"></i><i class="fa fa-chevron-right"></i>&nbsp;&nbsp;What is your IP?</a>
                </div>

                <div class="navbar-collapse collapse">
                    <p class="navbar-text pull-right">
                    <a href="http://www.twitter.com/cedwardsmedia" target="_blank" class="navbar-link"><i class="fa fa-twitter fa-lg"></i></a>&nbsp;&nbsp;<a href="http://www.gratipay.com/~cedwardsmedia" target="_blank" class="navbar-link"><i class="fa fa-gratipay fa-lg"></i></a>&nbsp;&nbsp;<a href="https://www.github.com/cedwardsmedia/whats-your-ip" target="_blank" class="navbar-link"><i class="fa fa-github fa-lg"></i></a>
                    </p>
                </div><!--/.nav-collapse -->
            </div><!--/container-->
        </div><!--/navbar-->



        <div id="content">
          <div class="jumbotron">
            <p class="lead">Your IP address is</p>
            <? echo $string; ?>
            <p class="lead">Your user agent is</p>
            <pre><code><? echo $agent; ?></code></pre>
          </div><!--/jumbotron -->

          <div class="row marketing">
            <div class="col-lg-12">
              <p class="lead">What is an IP address?</p>
              <p>An Internet Protocol address (IP address) is a numerical label assigned to each device (e.g., computer, printer) participating in a computer network that uses the Internet Protocol for communication. An IP address serves two principal functions: host or network interface identification and location addressing. Its role has been characterized as follows: "A name indicates what we seek. An address indicates where it is. A route indicates how to get there."</p>
              <p><a class="btn btn-info" href="https://en.wikipedia.org/wiki/Ip_address" role="button" target="blank">Learn more</a></p>

              <p class="lead">What is a user agent?</p>
              <p>The user agent string is a piece of a text that your web browser sends to a server every time it requests a file or page. This text identifies your web browser and operating system. This information is used by web servers for various purposes such as sending slightly different style sheets depending on your browser, offering the right download for a program for your OS, and web-based stats like Google Analytics.</p>
              <p><a class="btn btn-info" href="https://en.wikipedia.org/wiki/User_agent" role="button" target="blank">Learn more</a></p>
            </div>
          </div><!--/row marketing -->


          <div id="footer" class="footer">
            <p>The source code for this software is available on <a href="https://www.github.com/cedwardsmedia/whats-your-ip">Github</a> and is licensed under the <a href="https://www.github.com/cedwardsmedia/whats-your-ip/LICENSE">MIT License</a></p>
            <p class="copyright">&copy; 2014 - <?php echo date(Y);?> Corey Edwards - All Rights Reserved</p>
          </div><!--/footer -->

        </div><!--/content -->
    </div><!--/container -->
    </div><!--/wrap-->


    <!-- Insert Credits Script -->
    <script src="http://www.cedwardsmedia.com/credit.js"></script>
    <!-- End Credits Script -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
