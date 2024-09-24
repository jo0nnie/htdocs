<?php
namespace App\Models;

use illuminate\database\eloquent\factories\hasfactory;
use illuminate\database\eloquent\Model;

class Modelo extends Model
{
    use hasfactory;

    protected $fillable = ["nombre", "marca_id"];
}

class Vehiculo extends Model
{
    use hasfactory;

    protected $fillable = [
        "patente",
        "modelo_id"
    ];
}