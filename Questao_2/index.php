<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1>Questão 02</h1>
    <div class="container">
        <form action="index.php" method="$_GET">
            <input type="text" name="palavra" class="text" placeholder="Digite algo"><br><br>
            <input type="submit" class="submit">
        </form>
    </div>

    <?php

    $vogais = [
        'a', 'A', 'á', 'Á', 'à', 'À', 'â', 'Â',  'ã', 'Ã',
        'e', 'E', 'é', 'É', 'ê', 'Ê',
        'i', 'I', 'í', 'Í',
        'o', 'O', 'ó', 'Ó', 'õ', 'Õ',
        'u', 'U', 'ú', 'Ú'
    ];

    if (empty($_GET['palavra'])) {
    } else {
        $text = $_GET['palavra'];
        foreach ($vogais as $vow) {
            $text = str_replace($vow, '?', $text);
        }
        echo '<br> <div class="palavra">' . $text . '</div>';
    }

    ?>

</body>

</html>