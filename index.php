<?php
include_once("database/db_connection.php");
$mysql = new DbConnection();
$students = $mysql->list("students");

include_once("helper/base_url.php");
// header
include_once("layout/partial/header.php");

//navbar
include_once("layout/partial/navbar.php");

// content
include_once("helper/load_menu.php");

// footer
include_once("layout/partial/footer.php");
