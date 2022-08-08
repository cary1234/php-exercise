<!DOCTYPE html>
<html lang="en">

<head>
    @include('navbar')
</head>

<body>
    <?php
    $numInput = 48;
    function add_digits($num)
    {
        if ($num > 0) {
            return ($num - 1) % 9 + 1;
        } else {
            return 0;
        }
    }

    print_r("Input: " . $numInput . " <br/> result:" . add_digits($numInput) . "\n");

    ?>
</body>

</html>