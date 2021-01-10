<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Fotos Model
 */
class Foto extends Model
{
  const CREATED_AT = 'creado';
  const UPDATED_AT = 'modificado';

  protected $table = 'fotos';


  protected $fillable = [
    'titulo', 'extension', 'comentarios', 'meta', 'artista_id', 'exhibicion_id',
    'coleccion_id', 'publicacion_id'
  ];

  protected $hidden = [];
}
?>
