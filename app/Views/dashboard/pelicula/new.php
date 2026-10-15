<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('contenido') ?>

<?= view('partials/_form-error'); ?>

<h1>Crear película</h1>


    <form action="create" method="post">
<label for="title">Título</label>
<input type="text" name="titulo" value="<?= old('titulo') ?>" />
<br />
<br />
<textarea name="descripcion"></textarea><br /><br />
<input type="submit" value="Crear" />
    </form>

<?= $this->endSection() ?>
