<?php

function getPage()
{
    if (isset($_GET['page'])) {
        if (file_exists("resources/views/" . $_GET['page'] . ".view.php")) {
            echo "Gevonden";
            return "resources/views/" . $_GET['page'] . ".view.php";
        } else {
            return "resources/views/errors/404.view.php";
        }
    }

    return "./resources/views/home.view.php";
}
