<?php

require_once "functions.php";

echo <<<HTML
<!DOCTYPE html>
<html lang="es">

<head>

  <meta http-equiv="expires" content="0" />
  <meta http-equiv="pragma" content="no-cache" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  

  <title>Herdez</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="im/favicon.png?v=2" rel="icon" type="image/png"  />  
  <link href="im/favicon.png?v=2" rel="apple-touch-icon">

<!--
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>  
-->

  <link rel="stylesheet" href="fonts/stylesheet.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
  <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />-->


</head>
<body>

<input type="text" style="display:none; position:fixed; z-index:30; top:0.9em;right:2em; background-color:transparent; width:100px; color:cyan; opacity:0.4; font-size:1.4em" value="000" id="toptxt1">

<input type="text" style="display:none; position:fixed; z-index:30; top:0.5em;right:13em; background-color:transparent; width:100px; color:yellow;opacity:0.4" value="000" id="toptxt2">

<input type="text" style="display:none; position:fixed; z-index:30; top:0.5em;left:12vw; background-color:transparent; width:100px; color:orange;opacity:0.4" value="home" id="toptxt3">

HTML;



?>