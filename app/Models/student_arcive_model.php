<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_arcive_model extends Model
{
   public $table='student_arcive';
   public $incrementing=true;
   public $keyType='int';
   public $timestamps=false;
   public $primaryKey='id'; 
}
