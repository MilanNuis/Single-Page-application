<?php

function getPage()
{
    if (isset($_GET['page'])) {
        if (file_exists("resources/views/" . $_GET['page'] . ".view.php")) {
            return "resources/views/" . $_GET['page'] . ".view.php";
        } else {
            return "resources/views/errors/404.view.php";
        }
    }

    return "./resources/views/home.view.php";
}


function isAdmin()
{
    return isset($_SESSION['loggedInUser']) && $_SESSION['loggedInUser']['admin'] == 1 ? true : false;
}
