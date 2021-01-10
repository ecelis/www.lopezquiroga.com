<?php
namespace App\Http\Controllers;

use App\Models\Coleccion;
use Illuminate\Http\Request;

class ColeccionController extends Controller
{
  public function showAllColecciones()
  {
    return response()->json(Coleccion::all());
  }

  public function showOneColeccion($id)
  {
    return response()->json(Coleccion::find($id));
  }

  public function create(Request $request)
  {
    $this->validate($request, [
      'nombre' => 'required',
      'descripcion' => 'required'
    ]);

    $author = Coleccion::create($request->all());

    return response()->json($author, 201);
  }

  public function update($id, Request $request)
  {
    $author = Coleccion::findOrFail($id);
    $author->update($request->all());

    return response()->json($author, 200);
  }

  public function delete($id)
  {
    Coleccion::findOrFail($id)->delete();
    return response('Deleted Successfully', 200);
  }
}
?>
