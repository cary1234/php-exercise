<!DOCTYPE html>
<html lang="en">

<head>
    @include('welcome')
</head>

<body>

    <?php
    echo "<pre>";
    for ($row = 0; $row <= 10; $row++) {
        for ($column = 0; $column <= 10; $column++) {
            if ((($column == 1 or $column == 10) and $row != 0) or (($row == 0 or $row == 5) and ($column > 1 and $column < 10))) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }
    echo "</pre>";
    ?>
</body>

</html>