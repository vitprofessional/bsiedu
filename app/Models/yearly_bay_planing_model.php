<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yearly_bay_planing_model extends Model
{
   public $table='yearly_bay_planing';
   public $incrementing=true;
   public $keyType='int';
   public $timestamps=false;
   public $primaryKey='id'; 
}
