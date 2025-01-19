<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instituteDetailsModel extends Model
{
   public $table='institute_details';
   public $incrementing=true;
   public $keyType='int';
   public $timestamps=false;
   public $primaryKey='id';
}
