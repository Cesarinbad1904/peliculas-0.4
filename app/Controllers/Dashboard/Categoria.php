<?php
namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;
use App\Models\CategoriaModel;

class Categoria extends BaseController
{

// ======== Mostrar todas las categorías ================================
    public function index()
    {

        $categoriaModel = new CategoriaModel();

        return view('dashboard/categoria/index', [
            'categorias' => $categoriaModel->findAll(),
        ]);
    }
// =====================================================================



// ====================== Mostrar una categoría  ============================
    public function show($id)
    {
        $categoriaModel = new CategoriaModel();
        $data = [
        'categoria' => $categoriaModel->find($id),
        ];

        echo view('dashboard/categoria/show', $data);
    }
// ========================================================================




// ========== Mostrar formulario para crear una nueva categoría ==============
    public function new()
    {

    $data = [
        'categoria'=> ['titulo'=>''],
        ];
    
        return view('dashboard/categoria/new', $data);
    }
// ==========================================================================



// ========== Crear una nueva categoría (No requiere una vista) ==============
    public function create()
    {

        $categoriaModel = new CategoriaModel();

        $categoriaModel->insert([
            'titulo' => $this->request->getPost('titulo')
        ]);

       // Redirigimos a la página:
   return redirect()->to('/dashboard/categoria/new')->with('mensaje', 'Registro insertado con éxito');
    }
// ==========================================================================




// =============== Muestra formulario para editar una categoría ======
    public function edit($id)
    {
        $categoriaModel = new CategoriaModel();
    $data = [
        'categoria'=> $categoriaModel->find($id),
        ];    

        return view('dashboard/categoria/edit', $data);
    }
// ===================================================================




// ========== Actualizar una categoría (No necesita vista) =============
    public function update($id)
    {

        $categoriaModel = new CategoriaModel();

        $categoriaModel->update($id, [
            'titulo' => $this->request->getPost('titulo')
        ]);

        echo 'update';
    }

// ====================================================================




// ================ Eliminar una categoría (sin vista)=====================
    public function delete($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);

        echo "Categoría eliminada";
    }
// =======================================================================


}
