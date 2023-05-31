<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    public function Restaurantes()
        {
            return $this->belongsTo(Restaurante::class);
        }
    public function Clientes()
        {
            return $this->belongsTo(Cliente::class);
        }
    public function Facturas()
        {
            return $this->belongsTo(Factura::class);
        }
}
