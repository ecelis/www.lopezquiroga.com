<?php
namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
  public function showAllFotos()
  {
    return response()->json(Foto::all());
  }

  public function showOneFoto($id)
  {
    return response()->json(Foto::find($id));
  }

  public function create(Request $request)
  {
    $this->validate($request, [
      'nombre' => 'required',
      'pais' => 'required',
      'categoria' => 'required'
    ]);

    $author = Foto::create($request->all());

    return response()->json($author, 201);
  }

  public function update($id, Request $request)
  {
    $author = Foto::findOrFail($id);
    $author->update($request->all());

    return response()->json($author, 200);
  }

  public function delete($id)
  {
    Foto::findOrFail($id)->delete();
    return response('Deleted Successfully', 200);
  }
}
?>
