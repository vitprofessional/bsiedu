<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contentmangement extends Model
{
   public $table='pages';
   public $incrementing=true;
   public $keyType='int';
   public $timestamps=false;
   public $primaryKey='id';
}
