<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1: Getting Started with PHP - Trang</title>
</head>
<body>

    <?php 
        $my_name = "Trang"; 
        echo "<h3>Hello world! My name is \"$my_name\"<h3>"; 

        $title = "PHP is interesting.";
        echo "<h4>".$title."</h4>";

        $g1 = 5;
        $g2 = 4;
        $g3 = 5;

        echo "<table border=1><tr><th>S.n.</th><th>Name</th><th>Grade</th></tr>";
        echo "<tr><th>1</th><th>John</th><th>".$g1."</th></tr>";
        echo "<tr><th>2</th><th>Alice</th><th>".$g2."</th></tr>";
        echo "<tr><th>3</th><th>Bob</th><th>".$g3."</th></tr></table>";
        ?>
        <img src="screenshot_docker_env.png">
</body>
</html>