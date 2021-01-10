<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Colecciones Model
 */
class Coleccion extends Model
{
  const CREATED_AT = 'creado';
  const UPDATED_AT = 'modificado';

  protected $table = 'colecciones';


  protected $fillable = [
    'nombre', 'descripcion', 'activo', 'publicado'
  ];

  protected $hidden = [];
}
?>
