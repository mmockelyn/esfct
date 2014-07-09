<?php
//connexion à la base de donnée

$host = "localhost";
$user = "root";
$pass = "";
$base = "esfct";

mysql_connect($host,$user,$pass);
mysql_select_db($base);

// redirection root
$rootsite = "http://localhost/esfct/admin00/";