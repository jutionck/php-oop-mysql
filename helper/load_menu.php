<?php

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

switch ($page) {

    case "dashboard":
        require("./layout/dashboard.php");
        break;
    case "students":
        require("./layout/body/student/index.php");
        break;
    case "students/add":
        require("./layout/body/student/create.php");
        break;
    case "students/edit/(:any)":
        require("./layout/body/student/update.php");
        break;
    default:
        require("./layout/dashboard.php");
}
