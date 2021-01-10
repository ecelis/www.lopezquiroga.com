<?php
namespace App\Http\Controllers;

use App\Models\Exhibicion;
use Illuminate\Http\Request;

class ExhibicionController extends Controller
{
  public function showAllExhibiciones()
  {
    return response()->json(Exhibicion::all());
  }

  public function showOneExhibicion($id)
  {
    return response()->json(Exhibicion::find($id));
  }

  public function create(Request $request)
  {
    $this->validate($request, [
      'nombre' => 'required',
      'artistas' => 'required',
      'descripcion' => 'required',
      'inicio' => 'required'
    ]);

    $author = Exhibicion::create($request->all());

    return response()->json($author, 201);
  }

  public function update($id, Request $request)
  {
    $author = Exhibicion::findOrFail($id);
    $author->update($request->all());

    return response()->json($author, 200);
  }

  public function delete($id)
  {
    Exhibicion::findOrFail($id)->delete();
    return response('Deleted Successfully', 200);
  }
}
?>
