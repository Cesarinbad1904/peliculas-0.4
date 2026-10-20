<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('contenido') ?>
<?= view('partials/_form-error'); ?>

    <h1>Actualizar película</h1>

    <form action="/dashboard/pelicula/update/<?= $pelicula->id ?>" method="post">

<label for="title">Título</label>
<input type="text" name="titulo" value="<?= $pelicula->titulo ?>" />
<br />
<br />
<textarea name="descripcion"><?= $pelicula->descripcion ?></textarea><br /><br />
<input type="submit" value="Actualizar" />

    </form>
<?= $this->endSection() ?>
