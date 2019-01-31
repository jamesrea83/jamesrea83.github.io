<?php

//index.php
session_start();
//load & initialize any global libraries
require_once "model.php";
require_once "controllers.php";


//route the request internally


parse_str($_SERVER["QUERY_STRING"], $query);

$route = $query["first"];

if ($query["second"][0] == "/") {
  $arg = substr($query["second"], 1);
} else {
  $arg = $query["second"];
}

//echo $route . "<br />";
//echo $arg;


if ($route == "login") {
  login_action();
} elseif ($route == "show") {
  show_action($arg);
} elseif ($route == "create") {
  create_action();
} elseif ($route == "vote") {
  vote_action();
} elseif ($route == "logout") {
  logout_action();
} else {
  list_action();
}

?>