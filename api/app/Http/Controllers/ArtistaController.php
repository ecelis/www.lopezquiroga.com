<?php
namespace App\Http\Controllers;

use App\Models\Artista;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
  public function showAllArtistas()
  {
    return response()->json(Artista::all());
  }

  public function showOneArtista($id)
  {
    return response()->json(Artista::find($id));
  }

  public function create(Request $request)
  {
    $this->validate($request, [
      'nombre' => 'required',
      'pais' => 'required',
      'categoria' => 'required'
    ]);

    $author = Artista::create($request->all());

    return response()->json($author, 201);
  }

  public function update($id, Request $request)
  {
    $author = Artista::findOrFail($id);
    $author->update($request->all());

    return response()->json($author, 200);
  }

  public function delete($id)
  {
    Artista::findOrFail($id)->delete();
    return response('Deleted Successfully', 200);
  }
}
?>
