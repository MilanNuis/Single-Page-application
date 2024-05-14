<?php

require_once("./configs/config.php");
require_once("./configs/helper.php");

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
</head>

<body>
    <?php include("./components/nav.php") ?>

    <?php require_once(getPage()) ?>

    <?php include("./components/footer.php") ?>
</body>

</html>