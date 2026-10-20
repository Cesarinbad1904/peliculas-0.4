<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>

   <h1>Listado de categorías</h1>

    <p><a href="/dashboard/categoria/new">Crear</a></p>
    <table border="1">
        <tr>
            <th>
                Id
            </th>
            <th>
                Título
            </th>
            
            <th>
                Ver
            </th>

            <th>
                Editar
            </th>

            <th>
                Eliminar
            </th>
        </tr>

        <?php foreach ($categorias as $key => $p) : ?>
            <tr>
                <td><?= $p->id ?></td>
                <td><?= $p->titulo ?></td>
                <td>
                    <a href="/dashboard/categoria/show/<?= $p->id ?>">Ver</a>
                </td>
                
                <td>
                    <a href="/dashboard/categoria/edit/<?= $p->id ?>">Edit</a>
                </td>
                
                <td>
                    <form action="/dashboard/categoria/delete/<?= $p->id ?>" method="post">
                        <button type="submit">Delete</button>
        
                    </form>
                </td>
            </tr>
        <?php endforeach ?>

    </table>
<?= $this->endSection() ?>