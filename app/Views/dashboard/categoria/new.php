<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>
<?= view('partials/_form-error'); ?>
<h1>Nueva categoría</h1>
 <form action="/dashboard/categoria/create" method="post">
    <label for="titulo">Título</label>
   <input type="text" name="titulo" placeholder="Título" id="titulo" value="<?= old('titulo') ?>">
   <button type="submit">Crear</button>
 </form>

<?= $this->endSection() ?>