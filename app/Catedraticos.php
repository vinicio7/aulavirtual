<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Catedraticos extends Model
{
    protected $table    = 'catedraticos';
    protected $fillable = ['nombre','correo','estado','direccion','telefono'];
}