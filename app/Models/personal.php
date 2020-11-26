<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\database\Eloquent\Model;


class personal extends Model
{
    protected $table='personal';
    protected $fillable=[
      'pe_lp', 'pe_dni', 'pe_nombre', 'pe_apellido','pe_domicilio','pe_provincia','pe_telefono','pe_fecha_alta'
    ];

    public $timestamps= false;

}
