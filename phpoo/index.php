

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'caneta.php';
        $ca1 = new caneta;
        $ca1->cor = "Azul";
        $ca1->ponta = 0.5;
        $ca1->tampada = true;
        $ca1->rabiscar();

        print_r($ca1);
    ?>
</body>
</html>