<?php 
namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;
use App\Models\PeliculaModel;

class Pelicula extends BaseController {


// ===========================================================================
public function index() {

$peliculaModel = new PeliculaModel();

$todasLasPeliculas = $peliculaModel->find();

//var_dump($todasLasPeliculas); // Usar solo en modo de desarrollo
//dd($todasLasPeliculas); // Usar solo en modo de desarrollo

$data = [
    'peliculas' => $todasLasPeliculas,
]; 

return view ('dashboard/pelicula/index', $data);

}


// ====================== Mostrar una película ============================

public function show($id) {
    $peliculaModel = new PeliculaModel();
    $data = [
        'pelicula' => $peliculaModel->find($id)
    ];

    return view('dashboard/pelicula/show', $data);
}
// =========================================================================



// =========== Mostrar formulario para crear una nueva película ============

public function new() {
   return view('dashboard/pelicula/new');
}
// =========================================================================




// =========== Método para crear una nueva película =======================

public function create() {
$peliculaModel = new PeliculaModel();

if($this->validate('peliculas')) { //validación
$peliculaModel->insert([
    'titulo'=>$this->request->getPost('titulo'), 
    'descripcion'=>$this->request->getPost('descripcion'), 
]);
} else {
  session()->setFlashdata('errors', $this->validator->getErrors()); 

    return redirect()->back()->withInput();
}
  
   // Redirigimos a la página:
   return redirect()->to('/dashboard/pelicula/new')->with('mensaje', 'Registro insertado con éxito');
}

// =========================================================================



// =========== Método para mostrar la página de edición de una película existente 

public function edit($id) {
$peliculaModel = new PeliculaModel();

 $data = [
        'pelicula' => $peliculaModel->find($id)
    ];

   return view('/dashboard/pelicula/edit', $data);
   
}
// =========================================================================



// =========== Método para actualizar una película específica =============== 

public function update($id) {
$peliculaModel = new PeliculaModel();
$peliculaModel->update($id, [
    'titulo'=>$this->request->getPost('titulo'),
    'descripcion'=>$this->request->getPost('descripcion')
]);

return redirect()->back()->with('mensaje', 'Registro modificado con éxito');
  
}
// =========================================================================


// =========== Eliminar una película =======================================

public function delete($id) {

$peliculaModel = new PeliculaModel();
$peliculaModel->delete($id);

//echo "Película eliminada";

// Redirigimos a esta página
   return redirect()->to('/dashboard/pelicula/')->with('mensaje', 'Registro eliminado con éxito');

}
// =========================================================================


}

?>