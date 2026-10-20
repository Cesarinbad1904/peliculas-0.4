<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('contenido') ?>

<p><a href="/dashboard/pelicula/new">Crear película</a></p>
<br />
<table border="1">
        <tr>
            <td>Título</td>
            <td>Descripción</td>
            <td>Ver</td>
            <td>Eliminar</td>
            <td>Editar</td>
        </tr>
     <?php foreach($peliculas as $key => $p) : ?>
        <tr>
            <td>
                <?= $p->titulo ?>
            </td>

            <td>
                <?= $p->descripcion ?>
            </td>

            <td>
                <a href="/dashboard/pelicula/show/<?= $p->id ?>">Ver</a>
            </td>
            <td>
            <form action="/dashboard/pelicula/delete/<?= $p->id ?>" method="POST"> 
                         <button type="submit">Eliminar</button>
            </td>
            <td>
                </form>
                <a href="/dashboard/pelicula/edit/<?= $p->id ?>">Editar</a>
            </td>
        </tr>
       <?php endforeach ?>
     </table>
    
   <?= $this->endSection() ?>
