<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Publicacions Model
 */
class Publicacion extends Model
{
  const CREATED_AT = 'creado';
  const UPDATED_AT = 'modificado';

  protected $table = 'publicaciones';


  protected $fillable = [
    'nombre', 'descripcion', 'activo'. 'publicado'
  ];

  protected $hidden = [];
}
?>
