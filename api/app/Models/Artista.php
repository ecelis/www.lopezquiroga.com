<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Artistas Model
 */
class Artista extends Model
{
  const CREATED_AT = 'creado';
  const UPDATED_AT = 'modificado';

  protected $table = 'artistas';


  protected $fillable = [
    'nombre', 'apellido', 'pais', 'categoria', 'biografia', 'activo'
  ];

  protected $hidden = [];
}
?>
