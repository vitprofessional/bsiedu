<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resource_management_model extends Model
{
   public $table='Resource_management';
   public $incrementing=true;
   public $keyType='int';
   public $timestamps=false;
   public $primaryKey='id'; 
}
