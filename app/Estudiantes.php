<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Estudiantes extends Model
{
    protected $table    = 'estudiantes';
    protected $fillable = ['nombre','correo','estado','direccion','telefono'];
}