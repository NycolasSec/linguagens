<?php
if (isset($_GET['pesquisa']) and !empty($_GET['pesquisa'])) {
    ?>

    <center>
        Você pesquisou por <?= $_GET['pesquisa'] ?>
    </center>

    <?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form action="/index.php" method="get">
            <label for="pesquisar">
                Pesquisar:
            </label>
            <input type="text" name="pesquisa">
            <input type="submit" value="Pesquisar">
        </form>
    </center>
</body>

</html>