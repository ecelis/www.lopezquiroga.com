<?php
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
  public function showAllUsuarios()
  {
    return response()->json(Usuario::all());
  }

  public function showOneUsuario($id)
  {
    return response()->json(Usuario::find($id));
  }

  public function create(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email|unique:usuarios',
      'nombre' => 'required',
      'apellido' => 'required',
      'sombra' => 'required'
    ]);

    $author = Usuario::create($request->all());

    return response()->json($author, 201);
  }

  public function update($id, Request $request)
  {
    $author = Usuario::findOrFail($id);
    $author->update($request->all());

    return response()->json($author, 200);
  }

  public function delete($id)
  {
    Usuario::findOrFail($id)->delete();
    return response('Deleted Successfully', 200);
  }
}
?>
