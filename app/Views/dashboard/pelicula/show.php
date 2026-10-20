<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>

<h1>Título: <?= $pelicula->titulo ?></h1>
     <h2>Descripción: <?= $pelicula->descripcion ?></h2>
     <br/>
     <a href="../" >Regresar</a>
     
<?= $this->endSection() ?>   