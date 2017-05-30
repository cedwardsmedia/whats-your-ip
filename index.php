<?php
// Copyright (c) 2015-2017 Corey Edwards

// We don't want errors being shown to the user.
ini_set('display_errors', 1);

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

echo $IP . "\n";

