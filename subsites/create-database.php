<!DOCTYPE html>
<html>
<head>
    <title>Show Databases</title>
</head>
<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "pass";
        $db = "test";

        $conn = new mysqli($host, $user, $pass, $db);
        $sql = $conn->query("create database " . $_GET["name"]);

        echo "Database \"" . $_GET["name"] . "\" created successfully!"
    ?><br>

    <a href="../index.php">Return</a>
</body>
</html>