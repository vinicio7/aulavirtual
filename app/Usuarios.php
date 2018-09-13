<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Catedraticos extends Model
{
    protected $table    = 'usuarios';
    protected $fillable = ['nombre','correo','estado','direccion','telefono'];
}