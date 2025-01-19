<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JuniorStaff extends Model
{
   public $table='juniorstaff';
   public $incrementing=true;
   public $keyType='int';
   public $timestamps=false;
   public $primaryKey='id';
}
