<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Exhibicions Model
 */
class Exhibicion extends Model
{
  const CREATED_AT = 'creado';
  const UPDATED_AT = 'modificado';

  protected $table = 'exhibiciones';


  protected $fillable = [
    'nombre', 'artistas', 'descripcion', 'inicio', 'fin', 'activo', 'publicado'
  ];

  protected $hidden = [];
}
?>
