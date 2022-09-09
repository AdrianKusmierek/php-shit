<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
</head>
<body>
    <form action="handler.php" method="get">
        <label for="select-menu">Choose an action:</label><br>

        <select name="select-menu" id="select-menu" onchange="checker(this)">
            <option value="show-databases">Show Databases</option>
            <option id="input" value="create-database">Create Database</option>
        </select>
        <div id="ifyes" style="display: none;">
            <input type="text" id="db-name" name="db-name">
        </div>
        <br>

        <input type="submit" value="Submit">
    </form>

    <script src="./script.js"></script>
</body>
</html>
