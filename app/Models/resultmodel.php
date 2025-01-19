<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resultmodel extends Model
{
   public $table='result';
   public $incrementing=true;
   public $keyType='int';
   public $timestamps=false;
   public $primaryKey='id';
}
