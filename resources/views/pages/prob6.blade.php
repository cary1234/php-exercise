<!DOCTYPE html>
<html lang="en">

<head>
    @include('welcome')
</head>

<body>
    <?php
    function my_sqrt($n)
    {
        $x = $n;
        $y = 1;
        while ($x > $y) {
            $x = ($x + $y) / 2;
            $y = $n / $x;
        }
        return $x;
    }
    print_r(my_sqrt(16) . "\n");

    ?>
</body>

</html>