<?php

$db_user = "root";
$db_mdp = "";
$db_name = "mfc";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_mdp);


?>