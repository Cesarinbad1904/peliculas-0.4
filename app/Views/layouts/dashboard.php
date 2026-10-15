<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo de dashboard</title>
</head>

<body>

    <h1><?= $this->renderSection('header') ?></h1>

    <?= view('partials/_session') ?>
    <?= $this->renderSection('contenido') ?>
</body>

</html>