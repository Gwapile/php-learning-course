<!DOCTYPE html>
<html>
    <head>
        <title>welcome to learn php variable</title>
    </head>
    <body>
        <form method="GET">
            <input type="text" name="vencha">
            <button>SUBMIT</button>
        </form>
<?php


$name = $_GET['vencha'];
echo $name." is a web developer";


?>
</body>
</html>