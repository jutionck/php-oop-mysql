<?php
include_once("../../../database/db_connection.php");
$mysql = new DbConnection();
$delete = $mysql->delete("students", $_GET["id"]);
