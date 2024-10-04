<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = rand(10,20);
        $lista = array();
        for ($i = 0; $i <= $num; $i++) {
            $lista[] = $i;
        }
        $colori = array('red', 'green', 'blue', 'brown', 'black');
        $output = '<ol>';
        foreach ($lista as $num) {
            $output .= "<li style='color: ". $colori[rand(0,4)]. ";'> $num </li>";
        }
        echo $output . '</ol>';
    ?>
</body>
</html>