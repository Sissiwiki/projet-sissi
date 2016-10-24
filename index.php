<?php require_once 'config.php' ;
require 'traitement.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


<div class="container">

    <form action="" method="POST"> <!-- balise form, qui prend 2 paramètres : "action" => sur quelle page va travailer le formulaire // "methode"=> soit POST ( la plus utilisé) soit GET ( utilisé mais moins, car les info passe par la barre d'adresse) -->

        <div class="form-group col-xs-3"> <!-- "class"  form-group permet un petit design, "col-xs-3" dimension par colone-->

            <label for="inputAliment">Aliments</label> <!-- balise label => "for" couplé a une ID dans l'input, permet en cliquant sur le label, d'avoir le curseur dans l'input CORRESPONDANT -->

            <input  name="aliment" type="text" class="form-control" id="inputAliment"> <!-- balise input => permet de rentrer du text, et fait le lien avec la base donnée. AU MOINS 2 PARAMeTRE !!! => "type" ( text/password/email...) //ET SURTOUT "name" il permet a PHP de savoir de quelle input vien l'information-->

                <br>

            <button type="submit" class="btn btn-primary">Ajouter</button>

        </div>

    </form>
    
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
