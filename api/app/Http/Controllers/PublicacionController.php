<?php
namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
  public function showAllPublicaciones()
  {
    return response()->json(Publicacion::all());
  }

  public function showOnePublicacion($id)
  {
    return response()->json(Publicacion::find($id));
  }

  public function create(Request $request)
  {
    $this->validate($request, [
      'nombre' => 'required',
      'descripcion' => 'required',
      'activo' => 'required'
    ]);

    $author = Publicacion::create($request->all());

    return response()->json($author, 201);
  }

  public function update($id, Request $request)
  {
    $author = Publicacion::findOrFail($id);
    $author->update($request->all());

    return response()->json($author, 200);
  }

  public function delete($id)
  {
    Publicacion::findOrFail($id)->delete();
    return response('Deleted Successfully', 200);
  }
}
?>
