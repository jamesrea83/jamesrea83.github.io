<?php
session_start();

//controllers.php

function login_action() {
    require "templates/login.php";
}

function list_action() {
    $surveys = get_all_surveys();
    require "templates/list.php";
}

function show_action($id) {
    $survey = get_survey_by_id($id);
    require "templates/show.php";
}

function create_action() {
  if ($_POST["survey-title"]) {
      create_new_survey();
      header("Location: /mvc");
  } else {
      require "templates/create.php";
  }
}



function vote_action() {
  cast_vote();
}

function logout_action() {
    logout();
    require "templates/login.php";
}

?>