<?php

$pdo = new PDO('mysql:host=localhost;dbname=sihame_porjet;', 'root', 'root'); //Connxion a la BDD 1 => hebergement (si sur ton pc = localhost) 2 dbname= nom de la base 3 utilisateur et 4
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);