<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>

<title>About</title>

<body>
    <div id="mySidenav" class="sidenav">
        <?php
            echo file_get_contents("http://localhost/my_project/my_project/data/list.txt");
        ?>
    </div>


</body>
</html>
