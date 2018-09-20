<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Administradores extends Model
{
    protected $table    = 'administradores';
    protected $fillable = ['nombre','correo','estado','direccion','telefono','fecha'];
}