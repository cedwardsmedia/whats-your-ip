<!--
Portions Copyright (c) 1997-2014 Corey Edwards All Rights
Reserved.

This file contains Original Code and/or Modifications of Original Code
as defined in and that are subject to the Corey Edwards Public Source
License Version 3.0 (the 'License'). You may not use this file except
in compliance with the License. Please obtain a copy of the License at
http://www.cedwardsmedia.com/cepsl/ and read it before using this
file.

The Original Code and all software distributed under the License are
distributed on an 'AS IS' basis, WITHOUT WARRANTY OF ANY KIND, EITHER
EXPRESSED OR IMPLIED, AND COREY EDWARDS HEREBY DISCLAIMS ALL SUCH
WARRANTIES, INCLUDING WITHOUT LIMITATION, ANY WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, QUIET ENJOYMENT OR
NON-INFRINGEMENT. Please see the License for the specific language
governing rights and limitations under the License.
-->

<?
if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])){
    $IP = $_SERVER['HTTP_CF_CONNECTING_IP']; // Get the IP address of the visitor from Cloudflare  
    } else {
    $IP = $_SERVER['REMOTE_ADDR'];
    }

if (strlen($IP) < 16) { // Check the length of the IP address to determine type
        $string = "<h1>" . $IP . "</h1>"; // IP address is version 4, so place it in <h1>
    } else {
        $string = "<h2>" . $IP . "</h2>"; // IP address is version 6, so place it in <h2> for size
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>What's your IP?</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        
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
                    <a href="http://www.twitter.com/cedwardsmedia" target="_blank" class="navbar-link"><i class="fa fa-twitter fa-lg"></i></a>&nbsp;&nbsp;<a href="http://www.gittip.com/cedwardsmedia" target="_blank" class="navbar-link"><i class="fa fa-gittip fa-lg"></i></a>&nbsp;&nbsp;<a href="http://code.cedwardsmedia.com/whats-your-ip" target="_blank" class="navbar-link"><i class="fa fa-bitbucket fa-lg"></i></a>
                    </p>
                </div><!--/.nav-collapse -->
            </div><!--/container-->
        </div><!--/navbar-->



        <div id="content">
          <div class="jumbotron">
            <p class="lead">Your IP address is</p>
            <? echo $string; ?>
          </div><!--/jumbotron -->
    
          <div class="row marketing">
            <div class="col-lg-12">
              <p class="lead">What is an IP address?</p>
              <p>An Internet Protocol address (IP address) is a numerical label assigned to each device (e.g., computer, printer) participating in a computer network that uses the Internet Protocol for communication. An IP address serves two principal functions: host or network interface identification and location addressing. Its role has been characterized as follows: "A name indicates what we seek. An address indicates where it is. A route indicates how to get there."</p>
              <p><a class="btn btn-info" href="https://en.wikipedia.org/wiki/Ip_address" role="button" target="blank">Learn more</a></p>
            </div>
          </div><!--/row marketing -->
    
    
          <div id="footer" class="footer">
            <p>This software includes GeoLite and GeoLite2 data created by MaxMind, available from <a href="http://www.maxmind.com">http://www.maxmind.com</a>.</p>
            <p>The source code for this software is available on <a href="http://code.cedwardsmedia.com">Bitbucket</a> and is licensed under <a href="http://www.cedwardsmedia.com/cepsl/">CEPSL v3</a></p>
            <p class="copyright">&copy; 2014 Corey Edwards - All Rights Reserved</p>
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