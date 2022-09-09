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
        $sql = $conn->query("show databases;");
        $dbs = array();

        while ($db = mysqli_fetch_row($sql))
            $dbs[] = $db[0];
        echo implode("<br/>", $dbs);
    ?><br>

    <a href="../index.php">Return</a>
</body>
</html>