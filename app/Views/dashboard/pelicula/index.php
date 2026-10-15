<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('contenido') ?>

<a href="/dashboard/pelicula/new">Crear película</a>
<br />
<table border="1">
        <tr>
            <td>Título</td>
            <td>Descripción</td>
            <td>Opciones</td>
        </tr>
     <?php foreach($peliculas as $key => $p) : ?>
        <tr>
            <td>
                <?= $p['titulo'] ?>
            </td>

            <td>
                <?= $p['descripcion'] ?>
            </td>

            <td>
                <a href="/dashboard/pelicula/show/<?= $p['id'] ?>">Ver</a>
                <form action="/dashboard/pelicula/delete/<?= $p['id'] ?>" method="POST"> 
                    <button type="submit">Eliminar</button>
                </form>
                <a href="/dashboard/pelicula/edit/<?= $p['id'] ?>">Editar</a>
            </td>
        </tr>
       <?php endforeach ?>
     </table>
    
   <?= $this->endSection() ?>
