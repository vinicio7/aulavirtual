<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Estudiantes extends Model
{
    protected $table    = 'estudiantes';
    protected $fillable = ['nombre','curso','fecha_pago','mora','fecha_ingreso','estado'];
}