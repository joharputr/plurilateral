<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>404 Page Not Found</title>
    <!-- <link rel="stylesheet" type="text/css" href="./assets/styles/bootstrap4/bootstrap.min.css"> -->
    <style type="text/css">
        body, html{
            height: 100%;
            width: 100%;
        }
        .frame {  
    height: 100%; /*can be anything*/
    width: 100%; /*can be anything*/
    position: relative;
}
img {  
    max-height: 100%;  
    max-width: 100%; 
    width: auto;
    height: auto;
    position: absolute;  
    top: 0;  
    bottom: 0;  
    left: 0;  
    right: 0;  
    margin: auto;
}
    </style>
</head>
<body>
    <div class="frame">
  <img  src="assets/image/error/notfound.png"/>
</div>
</body>
</html>