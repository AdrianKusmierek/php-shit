<!DOCTYPE html>
<html>
<head>
    <title>Handler</title>
</head>
<body>
    <?php
        if ($_GET["select-menu"] == "create-database") {
            header("Location: http://localhost:3000/subsites/" . $_GET["select-menu"] . ".php?name=" . $_GET["db-name"]);
        } else {
            header("Location: http://localhost:3000/subsites/" . $_GET["select-menu"] . ".php");
        }
    ?>
</body>
</html>