<?php
$db = new PDO("mysql:host=$server;dbname=$dbase",$user,$password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);