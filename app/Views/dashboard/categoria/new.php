<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>

<h1>Nueva categoría</h1>
 <form action="/dashboard/categoria/create" method="post">
    <?= view('/dashboard/categoria/_form', ['op' => 'Crear']) ?>
 </form>

<?= $this->endSection() ?>